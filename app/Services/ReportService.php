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

  }

  public function getReport($period) {
    $this->data = Order::query()
      ->where('end_at', '>' ,$period->start)
      ->where('end_at', '<', $period->end)
      ->with('mechanic');

      $sum = 0;
    foreach ($this->data->get() as $row) {
      $sum += $row->price;
      $this->income += $row->price;

      $date = $row->end_at->format('Y-m-d');

      $this->outputArray[$date]['income'] = $sum;
      $this->outputArray[$date]['orders_count'][] = $row->orders_count;
      $this->outputArray[$date]['mechanic'][] = $row->mechanic->name;
    }
    $this->outputArray['income for this period'] = $this->income;

    return $this->outputArray;
  }  
}