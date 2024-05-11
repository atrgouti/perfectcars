<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function doughnutChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [            'labels' => ["On rent", "Under repair", "Avaliable"],
            'data' => [10, 3, 17],
        ];
        return view('dashboard', compact('data'));
    }
}