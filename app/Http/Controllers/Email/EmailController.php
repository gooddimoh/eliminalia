<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function inbox(Request $request)
    {
        return view('email.email-inbox');
    }

    public function compose(Request $request)
    {
        return view('email.email-compose');
    }

    public function detail(Request $request)
    {
        return view('email.email-detail');
    }
}
