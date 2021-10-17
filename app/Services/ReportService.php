<?php

namespace App\Services;

use App\Models\Order;

class ReportService
{
  public $data;

  public $outputArray;

  public $income = 0;

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

      $sum = 0;
    foreach ($this->data->get() as $row) {
      $sum += $row->price;
      $this->outputArray[$row->end_at]['income'] = $sum;
      $this->outputArray[$row->end_at][] = $row->only(['mechanic_id', 'orders_count', 'price']);
      $this->income += $row->price;
    }
    $this->outputArray['income for this period'] = $this->income;
  }  
}