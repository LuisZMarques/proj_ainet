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
        return view('orders.create');
    }

    public function edit(Order $order): View
    {
        return view('orders.edit')->withOrder($order);
    }

    public function update(Request $request, Order $order): RedirectResponse
    {
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function store(Request $request): RedirectResponse
    {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function minhasEncomendas(Request $request): View
    {
        $encomendas = $request->user()->customer->encomendas;
  /*       $tipo = 'O';
        if ($request->user()) {
            $tipo = $request->user()->tipo ?? 'O';
        }
        if ($tipo == 'C') {
            $encomendas = $request->user()->customer->encomendas;
        }  */
        return view('encomendas.minhas', compact('encomendas', 'tipo'));
    }
}