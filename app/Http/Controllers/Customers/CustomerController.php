<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index()
    {
        return view("dashboard.admin.customers.index");
    }

    public function list_SADMIN()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(sadmin)", compact('customers'));
    }

    public function list_ADMIN()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(admin)", compact('customers'));
    }

    public function list_MANAGER()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(manager)", compact('customers'));
    }

    public function list_PARTNER()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(partner)", compact('customers'));
    }

    public function list_REGISTRATOR()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(registrator)", compact('customers'));
    }

    public function list_PENDING_BILLING()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(pending billing)", compact('customers'));
    }

    public function registration()
    {
        return view("dashboard.admin.customers.customer registration");
    }

    public function store()
    {
        return redirect()->back();
    }
}
