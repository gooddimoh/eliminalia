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

class UserManagement extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function list(Request $request)
    {
        //  Gate::after(function ($user, $ability, $result, $arguments) { });

        $users = User::all();
        var_dump($users);
        echo "data1";
        echo "data2";
        echo "data3";
        echo "data4";
        die();
        return view('dashboard.admin.usermanagement.index')->with('users', $users);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate(['title' => 'required|unique:posts|max:255', 'body' => 'required']);
        $roles = Role::all()->pluck('title', 'id');
        $users = User::all()->find();
        $request->session()->flush();
        $request->flush();
        $request->all();
        var_dump($validatedData);
        return view('dashboard.Admin.UserManagement.create')->with('users', $users);
    }

    public function store(StoreUserRequest $request)
    {
        $request->session()->flush();
        $request->flush();
        var_dump($request->all());
        die();
        $user = User::create($request->all());
        return view('admin.users.index')->with('users', $user);
    }

    public function edit(Request $request, User $user)
    {
//        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');
        $user->load('roles');
        return view('dashboard.manager.usermanagement.edit', compact('users'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $approved = $user->approved;
        $request->all();
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        if ($approved == 0 && $user->approved == 1) {
            $user->notify(new UserApprovedNotification());
        }
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
//        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
