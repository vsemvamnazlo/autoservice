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

    foreach ($this->data->get() as $row) {
      $date = $row->end_at->format('Y-m-d');
      $this->income += $row->price;
      
      $this->outputArray[$date]['income'] = ($this->outputArray[$date]['income'] ?? 0) + $row->price;
      $this->outputArray[$date]['orders_count'] = ($this->outputArray[$date]['orders_count'] ?? 0) + 1;
      $mechanic = $this->outputArray[$date]['mechanic'] ?? [];
      
      if (!in_array($row->mechanic->name, $mechanic)) {
        $this->outputArray[$date]['mechanic'][] = $row->mechanic->name;
      }
    }
    $this->outputArray['income for this period'] = $this->income;

    return $this->outputArray;
  }  
}