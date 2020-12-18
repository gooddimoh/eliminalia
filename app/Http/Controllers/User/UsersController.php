<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use App\Models\Role;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function index()
    {
        User::all();
        return $users = User::all()->jsonSerialize();
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());
        var_dump($user);
        $roles = Role::all()->pluck('title', 'id');
        $users = new User();
        return view('dashboard.admin.user.create', compact('roles', 'users'));
    }

    public function store(StoreUserRequest $request, Response $response)
    {
        $request->validate(['firstname' => 'required', 'lastname' => 'required', 'password' => 'required', 'email' => 'required']);
        $request->pjax();
        $response->isOk();
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        redirect()->back();
    }

//    public function input(){
//        $this->validate($request){
//            $this->validate($request), [ 'product_name' => 'required|max:255' ]
//        }
//
//        return view();
//    });

    public function edit(User $user)
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

    public function register($request)
    {
        $user = User::all();
//        $approved = $user->banned; ?
//        $approved = $user->approved;
//        $user = '';

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user->delete();
        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
