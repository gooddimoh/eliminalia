<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function getlogin()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $user = User::created($request->validate(['name' => 'required|max:555', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed']));
        User::create($request->all());
        $accessToken = $user->createToken('authToken')->accessToken;
        return view('auth.login');
    }

    public function store()
    {
        echo "its store request";
    }

    public function getlogout(Request $request)
    {
        var_dump($request->all());
    }

    public function getregister(Request $request)
    {
        $user = new User();
//        $user->c
        return view('auth.register');
    }

    public function PostRegister()
    {
        echo "postRegister";
    }
}
