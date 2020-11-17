<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("dashboard.Contacts.Contact Registration");
    }

    public function show()
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        die();
        echo "contacts";
        $contacts = Contacts::all();
        var_dump($contacts);
    }

    public function store()
    {
        echo "store";
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
