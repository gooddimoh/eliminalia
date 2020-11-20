<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Book extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'contact_book';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'fecha', 'tipo_contacto', 'tipo_contacto', 'id_medio_comunicacion',
        'nombre_empresa', 'cif', 'cargo', 'nombre', 'apellidos', 'dni', 'pais',
        'ciudad', 'provincia', 'direccion', 'codigo_postal', 'telefono', 'telefono2',
        'email', 'email2', 'web', 'observaciones', 'idioma', 'activo',
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
