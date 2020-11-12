<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Contacts';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id',
        'fecha',
        'nivel_permiso',
        'id_comercial ',
        'nombre',
        'apellidos',
        'nombre_empresa',
        'dni',
        'id_comercial ',
        'cif',
        'pais',
        'ciudad',
        'provincia',
        'direccion',
        'codigo_postal',
        'telefono',
        'telefono2',
        'email',
        'email2',
        'observaciones_cliente',
        'observaciones_gestor',
        'observaciones_comercial',
        'idioma',
        'presupuesto',
        'forma_pagos',
        'rastreo_hecho',
        'presupuesto_hecho',
        'cliente_firmado',
        'desechado',
        'toma_de_contacto',
        'documentacion_enviada',
        'motivo_desechado',
        'fecha_firmado',
        'fecha_desechado'
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

