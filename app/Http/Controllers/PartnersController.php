<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function Index()
    {
        return view("");
    }

    public function List()
    {
//        $users = User::all();
        $users = DB::select("select * from Users");
        return view("dashboard.admin.partners.list")->with('users', $users);
    }

    public function Registration()
    {
        return view("dashboard.admin.partners.registration");
    }
}


