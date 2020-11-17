<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calls_Contacts extends Model
{
    use HasFactory;

    protected $table = 'calls_contacts';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id ',
        'fecha ',
        'hora',
        'id_comercial',
        'id_contacto',
        'observaciones',
        'gestion_realizada',
        'llamada_realizada',
        'fecha_gestion'
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
