<?php

namespace App\Services;

use App\Models\Order;

class ReportService
{
  public $data;

  public $outputArray;

  public function __construct($period)
  {
    foreach ($period as $date) {
      $this->outputArray[] = $date->format('Y-m-d');
    }
  }

  public function getReport($period) {
    $this->data = Order::query()
      ->where('end_at', '>' ,$period->start)
      ->where('end_at', '<', $period->end)
      ->get();
      
    $this->outputArray = array_fill_keys($this->outputArray, []);

    foreach ($this->data as $row) {
      if(isset($this->outputArray[$row->end_at])) {
        $this->outputArray[$row->end_at][] = $row;
      }
    }
  }  
}
