<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show($id): Category|Collection|JsonResponse
    {
        try {
            return Category::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Category not found!'], 404);
        }
    }

    public function store(Request $request): Category|Collection|JsonResponse
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string',
            'thumbnail' => 'required|string',
            'images' => 'required|string',
            'videos' => 'required|string',
            'translations' => 'required|string',
        ]);

        $category = Category::create($validated);


        return response()->json($category, 201);
    }
}
