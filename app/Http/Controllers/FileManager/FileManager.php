<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManager extends Controller
{
    public static function inbox(Request $request)
    {
        $request->all()->Inbox() ? view('email.email-Inbox') : '';
    }

    public static function compose(Request $request)
    {
        $request->all()->Compose() ? view('email.email-Compose') : '';
    }

    public static function Detail(Request $request)
    {
        $request->all()->Detail() ? view('email.email-Detail') : '';
    }
}
