<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Gate;

class ContactsController extends Controller
{

    public function Index()
    {
        // maby use Gate //

        $users = User::all();
        $users = User::all();
        $users = User::all();
        $users = User::all();
        $users = User::all();
        $users = User::all();
        $users = User::all();
        var_dump($users);
        return view('admin.users.index', compact('users', $users));
    }

    public function create()
    {
        $roles = Role::all()->pluck('title', 'id');
        $user = 'user';
        return view('admin.users.create', compact('roles', 'user'));
    }

    public function store(StoreUserRequest $request)
    {
        die();
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->back();
    }

    public function list()
    {
        //    $role = Role::all();
        //    $user = User::all();
        //    $role = '';
        //    $user = '';
        return view('dashboard.admin.contacts.list');
    }

    public function registration()
    {
        $data1 = '';
        $data2 = '';
        $data3 = '';
        $data4 = '';
        $data5 = $data1 . $data2 . $data3 . $data4;
        $roles = 'role';
        return view('dashboard.admin.contacts.registration', compact('roles'));
    }

    public function inquiries()
    {
        $users = User::all();
        return view('dashboard.admin.contacts.inquiries', compact('users'));
    }

    public function edit(Reques $request, User $user, Response $response)
    {
        $roles = Role::all()->pluck('title', 'id');
        $roles->load('roles');
        $request->session();
        $data1 = '';
        $data2 = '';
        $data3 = '';
        $data4 = '';
        $user = $data1 . $data2 . $data3 . $data4;
        $roles = $data1 . $data2 . $data3 . $data4;
        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UserRequest $request, User $user)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255'
        ]);

        $approved = $user->approved;
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        if ($approved == 0 && $user->approved == 1) {
            $user->notify(new UserApprovedNotification());
        }
        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {

        $user->load('roles');
        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user->delete();
        return back();
    }

    public function MassDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
