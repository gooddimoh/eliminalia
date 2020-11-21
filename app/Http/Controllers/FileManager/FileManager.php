<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManager extends Controller
{
    public static function Index(Request $request)
    {
        $request->all()->Compose() ? view('email.email-compose') : '';
        $request->all()->inbox() ? view('email.email-inbox') : '';
        $request->all()->iDetail() ? view('email.email-idetail') : '';

    }
}
