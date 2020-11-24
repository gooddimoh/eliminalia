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
        return view('dashboard.admin.usermanagement.index')->with('users', $users);
    }

    public function create(Request $request)
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $validatedData = $request->validate(['title' => 'required|unique:posts|max:255', 'body' => 'required']);

        $value = session('key', 'default');
//        $roles = Role::all()->pluck('title', 'id');
        $users = User::all();

        var_dump($value);

        // var_dump($validatedData);

        return view('dashboard.Admin.UserManagement.create')->with('users', $users);
    }

    public function store(StoreUserRequest $request)
    {

        $request->session()->flush();
        $request->flush();
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        die();
        return redirect()->route('admin.users.index')->with('users', $user);
    }

    public function edit(Request $request, User $user)
    {
//        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
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
