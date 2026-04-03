<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    // GET /api/categories — return all categories
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);
    }
}
