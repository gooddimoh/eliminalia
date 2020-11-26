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
//        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
//        if (Auth::check()) {
//            // The user is logged in...
//        }
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function Create()
    {
//        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::all()->pluck('title', 'id');
        return view('admin.users.create', compact('roles'));
    }

    public function Store(StoreUserRequest $request)
    {
        die();
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function List()
    {
        $data1 = '';
        $data2 = '';
        $data3 = '';
        $data4 = '';
        $roles = $data1 . $data2 . $data3 . $data4;
        return view('dashboard.admin.contacts.contact list', compact('roles'));
    }

    public function Registration()
    {
        $data1 = '';
        $data2 = '';
        $data3 = '';
        $data4 = '';
        $roles = $data1 . $data2 . $data3 . $data4;
        return view('dashboard.admin.contacts.contact registration', compact('roles'));
    }

    public function Inquiries()
    {
        // abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden'); //
        $users = User::all();

        return view('dashboard.admin.contacts.inquiries', compact('users'));
    }

    public function Edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::all()->pluck('title', 'id');
        $roles->load('roles');
        $data1 = '';
        $data2 = '';
        $data3 = '';
        $data4 = '';
        $user = $data1 . $data2 . $data3 . $data4;
        $roles = $data1 . $data2 . $data3 . $data4;
        return view('admin . users . edit', compact('roles', 'user'));
    }

    public function Update(UpdateUserRequest $request, User $user)
    {
        $approved = $user->approved;

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        if ($approved == 0 && $user->approved == 1) {
            $user->notify(new UserApprovedNotification());
        }

        return redirect()->route('admin . users . index');
    }

    public function Show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin . users . show', compact('user'));
    }

    public function Destroy(User $user)
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
