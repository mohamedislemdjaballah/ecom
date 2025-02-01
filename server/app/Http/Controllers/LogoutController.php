<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Logged out']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error logging out', 'error' => $e], 500);
        }
    }
}
