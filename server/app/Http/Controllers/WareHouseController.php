<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
class WareHouseController extends Controller
{
    public function index(): JsonResponse
    {
        // Validate the request...
        
        // Return all warehouses
        return response()->json(['message' => 'All warehouses']);
    }

    public function store(Request $request): JsonResponse
    {
        // Validate the request...
        
        // Create a new warehouse
        return response()->json(['message' => 'Warehouse created']);
    }

    public function show($id): JsonResponse
    {
        // Validate the request...
        
        // Return the warehouse with the given id
        return response()->json(['message' => 'Warehouse with id ' . $id]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        // Validate the request...
        
        // Update the warehouse with the given id
        return response()->json(['message' => 'Warehouse with id ' . $id . ' updated']);
    }

    public function destroy($id): JsonResponse
    {
        // Validate the request...
        
        // Delete the warehouse with the given id
        return response()->json(['message' => 'Warehouse with id ' . $id . ' deleted']);
    }
}
