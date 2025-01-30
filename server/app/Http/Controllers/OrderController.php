<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index():Collection|JsonResponse
    {
        // Validate the request...
        
        // Return all orders
        return response()->json(['message' => 'All orders']);
    }
}
