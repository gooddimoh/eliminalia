<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class Search extends Model
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
        'remember_token',
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'password',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function create(Request $request, array $data)
    {
        $request->validate();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Storage::makeDirectory('/userassets/' . $user->id);
        Storage::makeDirectory('/userassets/' . $user->id . "/img");
        Storage::makeDirectory('/userassets/' . $user->id . "/intro");
        Storage::makeDirectory('/userassets/' . $user->id . "/logo");
        Storage::makeDirectory('/userassets/' . $user->id . "/videos");

        return $user;
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function save(array $options = array())
    {
        $this->storeToDisk();
        return parent::save($options);
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
