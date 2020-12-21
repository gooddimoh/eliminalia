<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function inbox(Request $request)
    {
        $email = Email::all();
        return view('email.email-inbox', compact('email', $email));
    }

    public function compose(Request $request)
    {
        $email = Email::all();
        return view('email.email-compose', compact('email', $email));
    }

    public function detail(Request $request)
    {
        $email = Email::all();
        return view('email.email-detail', compact('email', $email));
    }
}
