<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Role extends Model
{
    use SoftDeletes;

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_MANAGEMENT = 'ROLE_MANAGEMENT';
    const ROLE_FINANCE = 'ROLE_FINANCE';
    const ROLE_ACCOUNT_MANAGER = 'ROLE_ACCOUNT_MANAGER';
    const ROLE_SUPPORT = 'ROLE_SUPPORT';

    public $table = 'roles';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
        //
        //
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
