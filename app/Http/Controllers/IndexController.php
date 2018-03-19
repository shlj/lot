<?php
/**
 * @name IndexController
 * @desc IndexController
 * @author hang.song02@ele.me
 */

namespace App\Http\Controllers;

use App\Charts\SampleChart;

class IndexController
{
    public function index()
    {
        $chart = new SampleChart();
        $chart->labels([1,2,3])
            ->dataset('Element 1', 'pie', [5,20,100])
            ->color(['#dc143c','#800080','#0000ff']);

        return view('test', ['chart' => $chart]);
    }
}