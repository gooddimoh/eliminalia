<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Inbox(Request $request)
    {
        return view('email.email-Inbox');
    }

    public function Compose(Request $request)
    {
        return view('email.email-Compose');
    }

    public function Detail(Request $request)
    {
        return view('email.email-Detail');
    }
}
