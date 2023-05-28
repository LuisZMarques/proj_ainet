<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all()->load('user');
        return view('customers.index', compact('customers'));
    }
}
