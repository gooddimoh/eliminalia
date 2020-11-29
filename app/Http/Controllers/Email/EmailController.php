<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Inbox(Request $request)
    {
        view('email.email-Inbox');
    }

    public function Compose(Request $request)
    {
        view('email.email-Compose');
    }

    public function Detail(Request $request)
    {
        view('email.email-Detail');
    }
}
