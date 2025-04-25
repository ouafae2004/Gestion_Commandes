<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Make sure the User model is imported

class AuthController extends Controller
{
    /**
     * Handle user login and generate a token.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Update last login time
            $user->last_login = now();
            $user->save();

            $token = $user->createToken('auth-token')->plainTextToken; // Generate API token

            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'token' => $token, // Return the token
            ], 200);
        }

        return response()->json(['message' => 'Invalid email or password'], 401);
    }

    /**
     * Handle role-based dashboard access.
     */
    public function dashboard(Request $request)
    {
        $user = $request->user(); // Get authenticated user

        switch ($user->role) {
            case 'Opératuer de saisie':
                return response()->json([
                    'message' => 'Welcome, Opératuer de saisie!',
                    'data' => 'Opératuer de saisie Dashboard Content',
                ]);
            
            case 'ramasseur':
                return response()->json([
                    'message' => 'Welcome, Ramasseur!',
                    'data' => 'Ramasseur Dashboard Content',
                ]);
            case 'Controlleur':
                return response()->json([
                    'message' => 'Welcome, Controlleur!',
                    'data' => 'Controlleur Dashboard Content',
                ]);
                case 'Caissier':
                    return response()->json([
                        'message' => 'Welcome, Caissier!',
                        'data' => 'Caissier Dashboard Content',
                    ]);
                case 'Expediteur':
                    return response()->json([
                        'message' => 'Welcome, Expediteur!',
                        'data' => 'Expediteur Dashboard Content',
                    ]);

            default:
                return response()->json([
                    'message' => 'Unauthorized role',
                ], 403);
        }
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete(); // Revoke the current token only
        return response()->json(['message' => 'Logged out successfully'], 200);
    }

     /**
     * Get the authenticated User.
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}

