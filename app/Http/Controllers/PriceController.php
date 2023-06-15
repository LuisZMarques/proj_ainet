<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::all()->first();
        return view('prices.index', compact('price'));
    }

    public function edit(Price $price)
    {
        return view('prices.edit', compact('price'));
    }

    public function update(Request $request, Price $price)
    {
        $price->update($request->all());
        return redirect('/precos');
    }
}
