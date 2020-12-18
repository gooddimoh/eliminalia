<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'links';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [        'id ',
        'fecha',
        'hora',
        'fecha_modificacion ',
        'hora_modificacion',
        'id_gestor ',
        'id_cliente ',
        'enlace',
        'estado ',
        'estado_seo',
        'fecha_modificacion_seo',
        'hora_modificacion_seo',
        'tipo_enlace',
        'id_categoria',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function index(){}

}
