<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showLoginForm()
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

        // Check if user already exists
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // Log the user in
            Auth::login($existingUser, true);
        } else {
            // Create a new user
            $newUser = User::create([
                'name'     => $user->name,
                'email'    => $user->email,
                'provider' => $provider,
                'provider_id' => $user->id,
                'password' => Hash::make(Str::random(16)), // Dummy password
            ]);

            // Log the user in
            Auth::login($newUser, true);
        }

        return redirect('/dashboard');  // Redirect to your intended page
    }
}
