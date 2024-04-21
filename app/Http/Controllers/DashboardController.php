<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function doughnutChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [            'labels' => ['Category A', 'Category B', 'Category C', 'Category D', 'Category E'],
            'data' => [25, 30, 15, 10, 20],
        ];
        return view('dashboard', compact('data'));
    }
}