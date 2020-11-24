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

        $validate = $request->validate(['name' => 'required|max:555', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed']);
        var_dump($validate);
        echo "postLogin";
        die();

        $validate['password'] = bcrypt($request->password);
        $user = User::created($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function Store()
    {
        echo "its store request";
    }

    public function GetLogout(Request $request)
    {
        echo 'getLogout';
        var_dump($request->validate());
        echo "getLogout";
        die();
    }

    public function GetRegister(Request $request)
    {
        $request->session(['key' => 'value']);
        var_dump($request->all());
    }

    public function PostRegister()
    {
        echo "postRegister";
    }
}
