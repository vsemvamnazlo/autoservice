<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Carbon\CarbonPeriod;

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

  public function getReport() {
    $this->data = DB::table('orders');
    $this->outputArray = array_fill_keys($this->outputArray, []);

    foreach ($this->data->get() as $row) {
      if(isset($this->outputArray[$row->end_at])) {
        $this->outputArray[$row->end_at][] = $row;
      }
    }
  }  
}
