<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TshirtImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class TshirtImageController extends Controller
{
    public function index() : View
    {
        $tshirt_images = TshirtImage::all();
        return view('tshirt_images.index', compact('tshirt_images'));
    }

    public function create(): View
    {
        return view('tshirt_images.create');
    }

    public function store(Request $request): RedirectResponse
    {
        TshirtImage::create($request->all());
        return redirect('/tshirt_images');
    }

    public function edit(TshirtImage $tshirt_image): View
    {
        return view('tshirt_images.edit', compact('tshirt_image'));
    }

    public function update(Request $request, TshirtImage $tshirt_image): RedirectResponse
    {
        $tshirt_image->update($request->all());
        return redirect('/tshirt_images');
    }
}
