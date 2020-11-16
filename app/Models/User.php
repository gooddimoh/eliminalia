<?php
namespace App\Models;

use App\Models\Role; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Model {
    use SoftDeletes, Notifiable, HasFactory;

    protected $table = 'users';

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
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        self::created(function (User $user) {
            $registrationRole = config('panel.registration_default_role');

            if (!$user->roles()->get()->contains($registrationRole)) {
                $user->roles()->attach($registrationRole);
            }
        });
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
