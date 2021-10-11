<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportService
{
  public $data;

  public $periodArray;

  public $outputArray;

  public function __construct($dateFrom, $dateTo)
  {
      $start = Carbon::createFromFormat('Y-m-d', substr($dateFrom, 0, 10));
      $end = Carbon::createFromFormat('Y-m-d', substr($dateTo, 0, 10));

      while ($start->lte($end)) {

          $this->periodArray[] = $start->copy()->format('Y-m-d');

          $start->addDay();
      }

      return $this->periodArray;
  }

  public function getReport() {
    $this->data = DB::table('orders');
    $this->outputArray = array_fill_keys($this->periodArray, []);

    foreach ($this->data->get() as $row) {
      if(isset($this->outputArray[$row->end_at])) {
        $this->outputArray[$row->end_at][] = $row;
      }
    }
  }  
}