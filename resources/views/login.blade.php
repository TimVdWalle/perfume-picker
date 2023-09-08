@extends('layouts.layout')

@section('content')
    <div class="container mx-auto text-center py-16">
        <h1 class="text-darkblue text-5xl font-bold mb-6">Login to PerfumePicker</h1>
        <p class="text-darkgrey mb-6">Choose your login method:</p>

        <div class="space-y-4">
            <a href="{{ url('login/google') }}" class="bg-lightblue text-darkgrey px-6 py-2 rounded hover:bg-mint">
                <i class="fab fa-google"></i> Login with Google
            </a>

            <a href="{{ url('login/apple') }}" class="bg-lightgrey text-darkgrey px-6 py-2 rounded hover:bg-mint">
                <i class="fab fa-apple"></i> Login with Apple
            </a>
        </div>
    </div>
@endsection
