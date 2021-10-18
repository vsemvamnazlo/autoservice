<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\ReportService;
// use Illuminate\Support\Facades\DB;
use Carbon\CarbonPeriod;

class WritingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testWriting()
    {
        $start = '2021-10-10';
        $end = '2021-10-30';
        
        $period = new CarbonPeriod($start, $end);
        
        $run = new ReportService($period);
        dump($run->getReport($period));
    }
}

// function getData()
//         {
//           return $data = DB::table('orders')->get();
//         }

//         $result = getData();
//         dump($result);