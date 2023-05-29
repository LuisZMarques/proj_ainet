<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('orderItems.index', compact('orderItems'));
    }

    public function create()
    {
        return view('orderItems.create');
    }

    public function store(Request $request)
    {
        OrderItem::create($request->all());
        return redirect('/orderItems');
    }
}
