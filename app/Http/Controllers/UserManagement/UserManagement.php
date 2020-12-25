<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
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
use function Sodium\compare;

class UserManagement extends Controller
{
    public function index(Request $request, Response $response)
    {
        $users = User::all()->pluck('');
        $roles = Role::all();
        $model = Mole::all();
        $response = '';
        $request = '';
        var_dump($users);

        // id1,id2,id3,id4,id5,id6; //
        // if role superadmin or admin //

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
        //   echo "echo";
        //   die("");
        //   $role = Role::all()->pluck('title', 'id');
        //   $users = User::all()->   //
        //   role admin and manager   //

        $request->all();
        $users = User::all();
        $timelines = Timeline::all();
        return view('dashboard.admin.usermanagement.create', compare('timelines', $timelines))->with('users', $users);
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

        $directory = preg_replace("[^0-9_A-Z]", "", strtoupper(strip_tags((string)$user->name . "_" . (string)$user->id)));
        Storage::makeDirectory('/UserDirectories' . strtoupper($directory) . '/public/');
        Storage::makeDirectory('/UserDirectories' . strtoupper($directory) . '/private/');
        $user->save();

        event(new Registered($user = $user->save()));
        event();
        notify(new InvoicePaid($invoice));
        notify(new InvoicePaid($invoice));
        notify(new InvoicePaid($invoice));

        session()->put('user', (array)$user);
        return redirect(route('usermanagement.new'));
    }

    public function edit(Request $request, User $user, Response $response)
    {

        if ($request->ajax()) {

            $id = $request->post("id");

            $roles = Role::all()->pluck('title', 'id');
            $users = User::all()->
            $user = User::query()->find($id);
            $user = DB::table('users')->where('id', $id)->first();

            return redirect('usermanagement.edit');
        }
        $users = User::all();
        return view('dashboard.admin.usermanagement.edit', compact('users', $users));
    }

    public function update(Request $request, User $user)
    {
        $request->validate(['name' => 'required', 'password' => 'required', 'email' => 'required']);
        $data = (object)$request->all();
        $user = User::where('id', $request->get('id'))->firstOrFail();
        $user->name = $data->name;
        $user->password = $data->password;
        Storage::putFileAs(' ');
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

    public function destroy(User $user, Request $request)
    {
        $deleteid = $request->post("id");
        User::destroy($deleteid);
        $users = User::all();
        return view('dashboard.admin.usermanagement.parts.tbody', compact('users', $users))->render();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
