<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function Inbox(Request $request)
    {
<<<<<<< HEAD
        return view('email.email-Inbox');
=======
        view('email.email-inbox');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
    }

    public function Compose(Request $request)
    {
<<<<<<< HEAD
        return view('email.email-Compose');
=======
        view('email.email-compose');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
    }

    public function Detail(Request $request)
    {
<<<<<<< HEAD
        return view('email.email-Detail');
=======
        view('email.email-detail');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
    }
}
