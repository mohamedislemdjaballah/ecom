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

    public function store(Request $request):JsonResponse
    {
        // Validate the request...
        
        // Create a new order
        return response()->json(['message' => 'Order created']);
    }

    public function show($id):JsonResponse
    {
        // Validate the request...
        
        // Return the order with the given id
        return response()->json(['message' => 'Order with id ' . $id]);
    }

    public function update(Request $request, $id):JsonResponse
    {
        // Validate the request...
        
        // Update the order with the given id
        return response()->json(['message' => 'Order with id ' . $id . ' updated']);
    }
}
