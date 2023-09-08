@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-darkblue text-3xl">Dashboard</h1>

        <!-- Quick Overview -->
        <div class="bg-mint p-4 mt-6">
            <h2 class="text-darkblue text-2xl">Quick Overview</h2>
            <p>Total Perfumes Logged: {{ $totalPerfumes }}</p>
            <p>Total Symptoms Logged: {{ $totalSymptoms }}</p>
        </div>

        <!-- Recent Activity -->
        <div class="bg-lightgrey p-4 mt-6">
            <h2 class="text-darkblue text-2xl">Recent Activity</h2>
            <p>Recently Added Perfumes:
                @foreach($recentPerfumes as $perfume)
                    {{ $perfume['name'] }} ({{ $perfume['brand'] }}),
                @endforeach
            </p>
            <p>Recently Logged Symptoms:
                @foreach($recentSymptoms as $symptom)
                    {{ $symptom['type'] }} (Severity: {{ $symptom['severity'] }}),
                @endforeach
            </p>
        </div>

        <!-- Placeholder for other sections like Personalized Recommendations, Insights, Quick Actions, and Admin Panel Shortcut -->

    </div>
@endsection
