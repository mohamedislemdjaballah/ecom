<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Validate the request...
        
        // Return all reviews
        return response()->json(['message' => 'All reviews']);
    }

    public function store(Request $request)
    {
        // Validate the request...
        
        // Create a new review
        return response()->json(['message' => 'Review created']);
    }

    public function show($id)
    {
        // Validate the request...
        
        // Return the review with the given id
        return response()->json(['message' => 'Review with id ' . $id]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        
        // Update the review with the given id
        return response()->json(['message' => 'Review with id ' . $id . ' updated']);
    }

    public function destroy($id)
    {
        // Validate the request...
        
        // Delete the review with the given id
        return response()->json(['message' => 'Review with id ' . $id . ' deleted']);
    }
}
