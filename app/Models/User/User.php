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
    ];

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'name',
        'surname',
        'password',
        'phone',
        'email',
        'dni',
        'address',
        'postal_code',
        'city',
        'state',
        'permission_level',
    ];

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


