<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chores extends Model
{
    use HasFactory;

    protected $table = 'chores';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id',
        'name',
        'description',
        'created by',
        'for',
        'importance',
        'start_date',
        'final_date',
        'finished_mark_date',
        'log',
        'state',
        'group',
        'order'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
}
