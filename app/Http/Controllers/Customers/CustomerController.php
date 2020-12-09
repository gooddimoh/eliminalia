<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view("dashboard.admin.customers.index");
    }

    public function list()
    {
        return view("dashboard.admin.customers.index");
    }

    public function store()
    {
        return redirect()->back();
    }
}
