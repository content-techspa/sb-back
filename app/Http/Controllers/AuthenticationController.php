<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    // Show Login Page
    public function showLogin()
    {
        return view('authentication.login');
    }

    // Handle Login Request
    public function login(Request $request)
    {
        try {
            // Validate input
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // Attempt login
            if (Auth::attempt($credentials, $request->remember)) {
                $request->session()->regenerate();
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful.',
                    'data' => ['redirect' => url('/administration/dashboard')],
                ]);
            }

            // Invalid credentials
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.',
                'data' => [],
            ], 401);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during login.',
                'data' => ['error' => $e->getMessage()],
            ], 500);
        }
    }

    // Handle Logout Request
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect to the login route
    return redirect()->route('login');
}
}
