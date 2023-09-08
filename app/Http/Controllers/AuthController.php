<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');  // This assumes you have a login.blade.php in your views folder
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        // Perform actions like logging in the user or creating a user in your database
        // based on the provider.

        // Here, you can also check for the 'provider' and 'provider_id' in the database.
        // If a user with the same 'provider' and 'provider_id' exists, log them in.
        // Otherwise, create a new user.
    }}
