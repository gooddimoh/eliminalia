<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Inbox(Request $request)
    {
        $request->all()->Inbox() ? view('email.email-Inbox') : '';
    }

    public function Compose(Request $request)
    {
        $request->all()->Compose() ? view('email.email-Compose') : '';
    }

    public function Detail(Request $request)
    {
        $request->all()->Detail() ? view('email.email-Detail') : '';
    }
}
