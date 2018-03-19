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
            ->options([
                'color' => ['#000000','#FFFFFF','#666666'],
            ])
            ->dataset('Element 1', 'pie', [5,20,100]);

        return view('test', ['chart' => $chart]);
    }
}