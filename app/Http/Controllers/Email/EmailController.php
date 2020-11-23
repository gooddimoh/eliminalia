<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function EmailInbox()
    {
        view('email.email-inbox');

    }

    public function EmailCompose()
    {
        view('email.email-compose');

    }

    public function EmailDetail()
    {
        view('email.email-detail');
    }

}
