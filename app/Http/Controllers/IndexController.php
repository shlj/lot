<?php
/**
 * @name IndexController
 * @desc IndexController
 * @author hang.song02@ele.me
 */

namespace App\Http\Controllers;

use Charts;

class IndexController
{
    public function index()
    {
        $chart = Charts::create('line', 'highcharts')
            ->setView('custom.line.chart.view')
            ->setTitle('My nice chart')
            ->setLabels(['First', 'Second', 'Third'])
            ->setValues([5,10,20])
            ->setDimensions(1000,500)
            ->setResponsive(false);
        return view('test', ['chart' => $chart]);
    }
}