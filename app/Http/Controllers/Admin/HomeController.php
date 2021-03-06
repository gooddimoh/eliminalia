<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\UserApprovedNotification;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return $users = User::all();
    }

    public function create()
    {
        $roles = Role::all()->pluck('title', 'id');
        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        redirect()->route('admin.users.index');
        return response()->json("StatusCode", 200);
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
//        $approved = $user->approved;
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
