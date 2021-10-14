<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Income;

class ReportService
{
  public $data;

  public $outputArray;

  public $income;

  public function __construct($period)
  {
    foreach ($period as $date) {
      $this->outputArray[] = $date->format('Y-m-d');
    }

    $this->outputArray = array_fill_keys($this->outputArray, []);

    $this->getReport($period);
  }

  public function getReport($period) {
    $this->data = Order::query()
      ->where('end_at', '>' ,$period->start)
      ->where('end_at', '<', $period->end);

    foreach ($this->data->get() as $row) {
        $this->outputArray[$row->end_at][] = $row->toArray();
        $this->income += $row->price;
    }
  }  

  public function addReportToDB() {
    Income::factory()->count(1)->withReport($this->income)->create();
  }
}