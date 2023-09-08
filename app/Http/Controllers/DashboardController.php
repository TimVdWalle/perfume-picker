<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // For demonstration purposes, we'll consider some sample data. You'll replace this with real data from your database.
        $totalPerfumes = 20; // Replace with a query to count user's total perfumes
        $totalSymptoms = 5;  // Replace with a query to count user's total symptoms
        $recentPerfumes = [
            // Replace with a query to get user's recent perfumes
            ['name' => 'Perfume A', 'brand' => 'Brand A'],
            ['name' => 'Perfume B', 'brand' => 'Brand B'],
        ];
        $recentSymptoms = [
            // Replace with a query to get user's recent symptoms
            ['type' => 'Headache', 'severity' => 7],
            ['type' => 'Nausea', 'severity' => 4],
        ];

        return view('dashboard', compact('totalPerfumes', 'totalSymptoms', 'recentPerfumes', 'recentSymptoms'));
    }

}
