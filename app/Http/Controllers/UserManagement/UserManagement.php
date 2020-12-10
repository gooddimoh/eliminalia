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
        $datavalidated = $request->validate(['title' => 'required|unique:posts|max:255', 'body' => 'required']);
        $role = Role::all()->pluck('title', 'id');
//        $users = User::all()->pluck('title', 'id');
        $request->all();

        $deleteid = $request->get("delete");
        User::destroy($deleteid);
        $users = User::all();
        return view('dashboard.admin.usermanagement.create')->with('users', $users);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        $user = User::all();
        return view('dashboard.admin.usermanagement.parts.tbody', compact('user', $user));
    }

    public function edit(Request $request, User $user)
    {
        $id = $request->get("edit");

        $roles = Role::all()->pluck('title', 'id');
        $users = User::all();
        $user = User::query()->find($id);
        $user = DB::table('users')->where('id', $id)->first();
        return view('dashboard.admin.usermanagement.edit', compact('user', $user, "users", $users));
    }

    public function update(UpdateUserRequest $request, User $user)
    {

        $request->all();
//        $user = User::UPDAT
//        $user->update();$request->all()
        $user->roles()->sync($request->input('roles', []));

//        if ($approved == 0 && $user->approved == 1) {
//            $user->notify(new UserApprovedNotification());
//        }
//        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
