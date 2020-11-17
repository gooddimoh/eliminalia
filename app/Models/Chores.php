<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chores extends Model
{
    use HasFactory;

    protected $table = 'Chores';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = ['id',
        'nombre',
        'descripcion',
        'creado_por',
        'para',
        'importancia',
        'fecha_inicio',
        'fecha_final',
        'fecha_marca_finalizado',
        'log',
        'estado',
        'grupo',
        'orden'
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
