<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use App\Models\Role;
use App\Models\User;

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
        return view('dashboard.superadmin.usermanagement.index')->with('users', $users);
    }

    public function create(Request $request)
    {
        $value = session('key', 'default');
        $roles = Role::all()->pluck('title', 'id');
        $users = User::all();
        var_dump($value);

        // var_dump($validatedData);

        return view('dashboard.superadmin.UserManagement.create')->with('users', $users);
    }

    public function store(Request $request)
    {
        $request->session()->flush();
        $request->flush();
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        die();
        return redirect()->back();
    }

    public function edit(Request $request, User $user)
    {

        $roles = Role::all()->pluck('title', 'id');
        $user->load('roles');
        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $approved = $user->approved;
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        if ($approved == 0 && $user->approved == 1) {
            $user->notify(new UserApprovedNotification());
        }

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request){
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
