<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;


class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::paginate(15);
        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        return view('colors.create');
    }

    public function store(Request $request)
    {
        Color::create($request->all());
        return redirect('/cores');
    }
    
}
