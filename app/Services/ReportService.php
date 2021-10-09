<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ReportService
{
  public $data;

  public $sortedArray;

  public $outpurArray;

  public function __construct() {
  $this->data = DB::table('orders')->get()->toArray();
  $this->sortedArray = array_column($this->data, 'id', 'end_at');
  }

  public function addElements() {
    $this->outpurArray = array_fill_keys(array_keys($this->sortedArray), []);

    foreach ($this->data as $row) {
      if (isset($this->outpurArray[$row->end_at])) {
          $this->outpurArray[$row->end_at][] = $row;
      }
    }
  }  
}

// foreach($this->data as $row){
//   $search_key = $row->end_at;
//   $this->outpurArray[$search_key] = $row;
// }