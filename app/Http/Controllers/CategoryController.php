<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //make a function index that gets all the categories from the database and returns them to the view
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}
