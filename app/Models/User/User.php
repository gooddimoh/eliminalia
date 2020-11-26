<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\Request;


class User extends Model
{
    use SoftDeletes, Notifiable, HasFactory;

    protected $table = 'Users';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'approved',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

//    protected function Create(array $data, Request $request)
//    {
//        $request->validate($request->all());
//        $messages = [
//            'required' => 'The :attribute is mandatory',
//            'phone_number.regex' => 'The phone number must be in E.164 format'
//        ];
//        $this->validate(
//            $request, [
//            'name' => 'required',
//            'phone_number' => 'required|regex:/^\+[1-9]\d{1,14}$/',
//            'description' => 'required'
//        ], $messages
//        );
//        $user = new User;
//        $user->save();
//        $newTicket = new Ticket($request->all());
//        $newTicket->save();
//
//        $request->session()->flash(
//            'status',
//            "We've received your support ticket. We'll be in touch soon!"
//        );
//
//        return redirect()->route('home');
//
//        Storage::makeDirectory(__DIR__ . '/Client_ID_/' . $user->id);
//        Storage::makeDirectory(__DIR__ . '/Client_ID_/' . $user->id . "/Internal/Client_Private_Documents/");
//        Storage::makeDirectory(__DIR__ . '/Client_ID_/' . $user->id . "/Links/Internal/Private_Documents/");
//        Storage::makeDirectory(__DIR__ . '/Client_ID_/' . $user->id . "/Links/Public_Documents/");
//        Storage::makeDirectory(__DIR__ . '/Client_ID_/' . $user->id . "/Public/Client_Documents/");
//
//        return view('list');
//    }

    public function Save(array $options = array())
    {
        return parent::save($options);
    }

    public function Data()
    {
        return $this->morphedByMany('App\Models\Role', '');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User')->withDefault(function ($user, $post) {
            $user->name = 'Guest Author';
        });
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}


