<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function GetLogin()
    {
        return view('auth.login');
    }

    public function PostLogin(Request $request)
    {
        print_r($request->get(["name"]));
        $validate['password'] = bcrypt($request->password);
        $user = User::created($request->validate(['name' => 'required|max:555', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed']));
        $accessToken = $user->createToken('authToken')->accessToken;
        return view('auth.login');
    }

    public function Store()
    {
        echo "its store request";
    }

    public function GetLogout(Request $request)
    {
        var_dump($request->all());
    }

    public function GetRegister(Request $request)
    {
        $request->session(['key' => 'value']);
        $user = User::create($request->all());
        echo "1234 GetRegister 1234";
        var_dump($request->all());
    }

    public function PostRegister()
    {
        echo "postRegister";
    }
}
