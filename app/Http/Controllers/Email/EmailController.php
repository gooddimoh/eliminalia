<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Inbox(Request $request)
    {
        return view('email.email-inbox');
    }

    public function Compose(Request $request)
    {
        return view('email.email-compose');
    }

    public function Detail(Request $request)
    {
        return view('email.email-detail');
    }
}
