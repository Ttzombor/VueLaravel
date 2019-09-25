<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data =[
            array(
                'title' => 'Tibster',
                'url' =>'https://tibster.com'
            ),
            array(
                'title' => 'Youtube',
                'url' =>'https://youtube.com'
            )

        ];


        return view('start',[
            'url_data' => $url_data
        ]);
    }

    public function getJson(){
        return([
            array(
                'title' => 'Tibster',
                'url' =>'https://tibster.com'
            ),
            array(
                'title' => 'Youtube',
                'url' =>'https://youtube.com'
            )
        ]);
}

    public function getDataChart(){
        return [
            'labels' => ['март','апрель','май','июнь'],
            'datasets'   => [
                [
                    'label' => 'Продажи',
                    'backgroundColor' => ['#F26202', '#F22302', '#F24502', '#F26652'],
                    'data' => [15000,5000,10000,30000],
                ]
            ]
        ];

    }

    public function getDataChartRandom(){
        return [
            'labels' => ['март','апрель','май','июнь'],
            'datasets'   => [
                [
                    'label' => 'Gold',
                    'backgroundColor' => ['#F26202'],
                    'data' => [rand(0,50000),rand(0,50000),rand(0,50000),rand(0,50000)],
                ],
                [
                'label' => 'Silver',
                'backgroundColor' => ['#F26030'],
                'data' => [rand(0,50000),rand(0,50000),rand(0,50000),rand(0,50000)],
            ]
            ]
        ];
    }
}
