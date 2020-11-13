<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_communicationBook extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'media_communication_book';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'fecha', 'tipo_medio_comunicacion', 'nombre ',
        'nombre_empresa', 'cif', 'pais', 'ciudad', 'provincia',
        'direccion', 'codigo_postal', 'telefono', 'telefono2',
        'email', 'email2', 'telefono', 'web', 'observaciones',
        'idioma', 'activo'
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
