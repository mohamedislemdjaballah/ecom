<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function show($id)
    {
        try {
            return Brand::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Brand not found!'], 404);
        }
    }
}
