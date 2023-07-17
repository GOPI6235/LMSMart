<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function socialRegister(Request $request)
    {
        // Perform validation on request data
        $validatedData = $request->validate([
            'token' => 'required',
            'unique_id' => 'required',
            'email' => 'required|unique:users,email',
            'medium' => 'required|in:google,facebook',
        ]);

        // Retrieve social user data from Google or Facebook
        $user = null;
        if ($validatedData['medium'] === 'google') {
            $user = Socialite::driver('google')->stateless()->userFromToken($validatedData['token']);
        } elseif ($validatedData['medium'] === 'facebook') {
            $user = Socialite::driver('facebook')->stateless()->userFromToken($validatedData['token']);
        }
        

        // Create a new user in the database
        $newUser = User::create([
            'name' => $user->name,
            'email' => $validatedData['email'],
            'login_medium' => $validatedData['medium'],
            'social_id' => $user->id,
        ]);

        // Generate an access token
        $token = $newUser->createToken('Laravel Password Grant Client')->plainTextToken;

        // Return the access token
        return response()->json(['token' => $token]);
    }

    public function socialLogin(Request $request)
    {
        // Perform validation on request data
        $validatedData = $request->validate([
            'token' => 'required',
            'medium' => 'required|in:google,facebook',
        ]);

        // Retrieve social user data from Google or Facebook
        $user = null;
        if ($validatedData['medium'] === 'google') {
            $user = Socialite::driver('google')->stateless()->userFromToken($validatedData['token']);
        } elseif ($validatedData['medium'] === 'facebook') {
            $user = Socialite::driver('facebook')->stateless()->userFromToken($validatedData['token']);
        }

        // Find the user in the database
        $existingUser = User::where('email', $user->email)->first();

        // If the user exists, generate an access token
        if ($existingUser) {
            $token = $existingUser->createToken('Laravel Password Grant Client')->plainTextToken;
            return response()->json(['token' => $token]);
        }

        // Return null token if user does not exist
        return response()->json(['token' => null]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        // Handle the Google callback data
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        // Handle the Facebook callback data
    }
}
