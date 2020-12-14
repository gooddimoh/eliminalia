<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use App\Models\Role;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class UserManagement extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $roles = Role::all();
        var_dump($users);
        if ($request->all()) {
            $view = view('data', compact('post'))->render();

            response()->stream('');
            return response()->json(['html' => $view]);
        }
        return view('dashboard.admin.usermanagement.index', compact('users', 'role'));
    }

    public function list(Request $request)
    {

        $users = User::all();
        return view('dashboard.admin.usermanagement.index', compact('users', $users));
    }

    public function create(Request $request)
    {
        $role = Role::all()->pluck('title', 'id');
//        $users = User::all()->pluck('title', 'id');
        $request->all();
        $users = User::all();
        return view('dashboard.admin.usermanagement.create')->with('users', $users);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'password' => 'required', 'email' => 'required', 'permission_level' => 'required']);
        $data = (object)$request->all();
        $user = new User;
        $user->name = $data->name;
        $user->password = $data->password;
        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->dni = $data->dni;
        $user->address = $data->address;
        $user->postal_code = $data->postalcode;
        $user->city = $data->city;
        $user->state = $data->state;
        $user->permission_level = $data->permission_level;
        $user->save();
        $directory = preg_replace("[^0-9_A-Z]", "", strtoupper(strip_tags((string)$user->name . "_" . (string)$user->id)));
        Storage::makeDirectory('/UserDirectories' . strtoupper($directory) . '/public/');
        Storage::makeDirectory('/UserDirectories' . strtoupper($directory) . '/private/');
        session()->put('user', (array)$user);
        var_dump(session()->get('user'));
        return redirect(route('usermanagement.new'));
    }

    public function edit(Request $request, User $user)
    {
        var_dump($request->all());
        die();
        $id = $request->get("edit");
        $roles = Role::all()->pluck('title', 'id');
        $users = User::all();
        $user = User::query()->find($id);
        $user = DB::table('users')->where('id', $id)->first();
        return view('dashboard.admin.usermanagement.edit', compact('user', $user, "users", $users));
    }

    public function update(Request $request, User $user)
    {
        $request->validate(['name' => 'required', 'password' => 'required', 'email' => 'required']);
        $data = (object)$request->all();
        echo "die";
        die();
        $user = User::where('id', $request->get('id'))->firstOrFail();
        $user->name = $data->name;
        $user->password = $data->password;
//        Storage::putFileAs();
        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->dni = $data->dni;
        $user->address = $data->address;
        $user->postal_code = $data->postalcode;
        $user->city = $data->city;
        $user->state = $data->state;
        $user->permission_level = $data->permission_level;
        $user->update();
        $user->notify(new AdminPageNotification());
        return redirect()->route('usermanagement.edit');
    }

    public function destroy(User $user,Request $request)
    {
        $deleteid = $request->get("delete");
        User::destroy($deleteid);
        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
