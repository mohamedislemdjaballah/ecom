<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Validate the request...
        
        // Return all products
        return response()->json(['message' => 'All products']);
    }

    public function store(Request $request)
    {
        // Validate the request...
        
        // Create a new product
        return response()->json(['message' => 'Product created']);
    }


    public function show($id)
    {
        // Validate the request...
        
        // Return the product with the given id
        return response()->json(['message' => 'Product with id ' . $id]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        
        // Update the product with the given id
        return response()->json(['message' => 'Product with id ' . $id . ' updated']);
    }

    public function destroy($id)
    {
        // Validate the request...
        
        // Delete the product with the given id
        return response()->json(['message' => 'Product with id ' . $id . ' deleted']);
    }
}
