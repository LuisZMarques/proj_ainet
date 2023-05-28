<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all()->load('user');
        return view('customers.index', compact('customers'));
    }
}
