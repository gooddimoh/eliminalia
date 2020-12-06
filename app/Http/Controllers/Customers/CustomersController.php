<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function Index()
    {
        return view("index");
    }

    public function store()
    {
        return redirect()->back();
    }
}
