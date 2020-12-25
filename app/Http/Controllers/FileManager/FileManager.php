<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManager extends Controller {

    public function index()
    {
        return view("index");
    }

    public function list()
    {
        return view("list");
    }

    public function create()
    {
        return view("index");
    }

    public function store()
    {
        return redirect()->back();
    }

    public function registration()
    {
        return view("create");
    }

}
