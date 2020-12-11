<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionHistory extends Controller
{
    public function index()
    {
        return view('dashboard.admin.actionhistory.actionhistory');
    }
}
