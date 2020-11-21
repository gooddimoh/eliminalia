<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        print_r($request->get(["name"]));
        echo "postLogin";
        die();

        $validatedData = $request->validate(['name' => 'required|max:555', 'email' => 'email|required|unique:users', 'password' => 'required|confirmed']);
        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function store()
    {
        echo "its store request";
    }

    public function getLogout(Request $request)
    {
        echo 'getLogout';
        var_dump($request->validate());
        echo "getLogout";
        die();
    }

    public function getRegister(Request $request)
    {
        $request->session(['key'=>'value']);
        var_dump($request->all());
    }

    public function postRegister()
    {
        echo "postRegister";
    }
}
