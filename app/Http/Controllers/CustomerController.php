<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;

class CustomerController extends Controller
{
    public function index()
    {
        $customerQuery = Customer::query();
        $customers = $customerQuery->with('user')->paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Customer::create($request->all());
        return redirect('/clientes');
    }
}
