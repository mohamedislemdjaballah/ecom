<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...
        
        // Create a new upload
        return response()->json(['message' => 'Upload created']);
    }

    public function destroy($id)
    {
        // Validate the request...
        
        // Delete the upload with the given id
        return response()->json(['message' => 'Upload with id ' . $id . ' deleted']);
    }
}
