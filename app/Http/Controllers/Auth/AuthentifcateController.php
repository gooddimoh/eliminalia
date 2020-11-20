<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use App\Models\Role;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthentifcateController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['name', 'required', 'email', 'required|email', 'password' => 'required']
        );
        if ($validator->fails()) {
            return response()->json()(['status_code' => 400, 'message' => 'Bad Request']);
        }

        $user = new User();
        $user->name = $request->name;
        $user->save();
        return response()->json([
            'status_code' => 200,
            'message' => 'User created successfully!'
        ]);
        if ($validator->fails()) {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request']);
        }
//        return view('admin.users.index', compact('users'));
    }


    public function login(Request $request)
    {

        $validator = \Illuminate\Validation\Validator::class;

        $validator = Validator::make($request);
    }

}
