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
        $user = User::created($request->validate(['name' => 'required|max:555', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed']));
        User::create($request->all());
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
        $user = new User();
//        $user->c
        return view('auth.register');
    }

    public function PostRegister()
    {
        echo "postRegister";
    }
}
