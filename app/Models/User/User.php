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

    protected $table = 'users';

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
        'password',
        'banned',
        'approved',
    ];

    public function Save(array $options = array())
    {
        return parent::save($options);
    }

    public function Create()
    {

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

        $this->morphedByMany();
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}


