@extends('layouts.layout')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-5xl font-bold mb-4">Welcome to PerfumePicker</h1>
        <p class="text-lg mb-8">
            Discover the ideal perfume that you can wear without the risk of headaches or migraines.
        </p>
    </div>

    <!-- Features Overview -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-6 text-darkblue">Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="feature-card">
                <h3 class="text-2xl font-bold text-lightblue">Track Perfumes</h3>
                <p>Log the perfumes you use and understand how they affect you.</p>
            </div>
            <div class="feature-card">
                <h3 class="text-2xl font-bold text-lightblue">Analyze Symptoms</h3>
                <p>Analyze your symptoms to discover correlations between your perfumes and any discomforts.</p>
            </div>
            <div class="feature-card">
                <h3 class="text-2xl font-bold text-lightblue">Get Recommendations</h3>
                <p>Receive personalized perfume recommendations that are likely to suit you.</p>
            </div>
        </div>
    </div>

    <!-- How It Works -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-6 text-darkblue">How It Works</h2>
        <ol class="list-decimal list-inside">
            <li>Log in using your Google or Apple account.</li>
            <li>Add perfumes you've used and log any symptoms you've experienced.</li>
            <li>Analyze the data to find the best perfumes for you.</li>
        </ol>
    </div>

    <!-- User Testimonials -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-6 text-darkblue">What Users Say</h2>
        <blockquote class="text-center">
            <p>"This app helped me find the perfect perfume that doesn't give me headaches!"</p>
            <footer>- Jane Doe</footer>
        </blockquote>
    </div>

    <!-- FAQs -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-6 text-darkblue">Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3 class="text-2xl font-bold">Is this app free to use?</h3>
            <p>Yes, it's completely free.</p>
        </div>
        <!-- Add more FAQs as needed -->
    </div>

    <!-- Contact Information -->
    <div class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-6 text-darkblue">Contact Us</h2>
        <p class="text-center">
            Have questions? Email us at <a href="mailto:info@perfumepicker.com">info@perfumepicker.com</a>
        </p>
    </div>

    <!-- Footer -->
    <div class="bg-lightblue text-white p-4 mt-16">
        <div class="container mx-auto text-center">
            <a href="{{ route('about') }}" class="mr-4">About Us</a> |
            <a href="{{ route('privacy') }}" class="ml-4 mr-4">Privacy Policy</a> |
            <a href="{{ route('terms') }}" class="ml-4">Terms & Conditions</a>
        </div>
    </div>
@endsection
