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

    public function list_sadmin()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customer list(sadmin)", compact('customers'));
    }

    public function list_admin()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(admin)", compact('customers'));
    }

    public function list_manager()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(manager)", compact('customers'));
    }

    public function list_partner()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(partner)", compact('customers'));
    }

    public function list_registrator()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(registrator)", compact('customers'));
    }

    public function list_pending_billing()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer list(pending billing)", compact('customers'));
    }

    public function registration()
    {
        $customers = Customers::all();
        return view("dashboard.admin.customers.customer registration");
    }

    public function store()
    {
        return redirect()->back();
    }
}
