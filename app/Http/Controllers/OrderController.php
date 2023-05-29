<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;

class OrderController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $orders = Order::paginate(15);
        return view('orders.index', compact('orders'));
    }

    public function create(): View
    {
        return view('cursos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Order::create($request->all());
        return redirect('/tshirt_images');
    }
}