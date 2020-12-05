<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'Name',
        'Date',
        'Phone number 1',
        'Phone number 2',
        'Email main',
        'Email secondary',
        'Address',
        'Postal code',
        'State',
        'Country',
        'Observations',
        'Telefono',
        'Telefono2',
        'email',
        'email2',
        'observaciones',
        'activo'
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
