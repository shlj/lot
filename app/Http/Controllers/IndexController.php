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
        $chart ->title("My Cool Chart")
            // A dimension of 0 means it will take 100% of the space
//            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
//            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', 'line', [5,20,100]);

        return view('test', ['chart' => $chart]);
    }
}