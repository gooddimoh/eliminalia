<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'usuarios';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'fecha', 'nombre_usuario', 'nivel_permiso',
        'password', 'id_gestor', 'nombre', 'apellidos',
        'nombre_empresa', 'dni', 'cif', 'pais', 'ciudad',
        'provincia', 'direccion', 'codigo_postal', 'telefono',
        'telefono2', 'email', 'email2', 'bloqueado', 'estado',
        'estado_facturacion', 'porcentaje_finalizados', 'observaciones_gestor',
        'fecha_contrato', 'dias_cumplimiento_contrato', 'fecha_finalizacion',
        'idioma', 'importe_contrato', 'pago_fraccionado', 'perfil_datos',
        'fecha_contrato', 'dias_cumplimiento_contrato', 'fecha_finalizacion',
        'perfil_enlaces', 'perfil_documentacion', 'perfil_facturacion', 'contrato_pagado',
        'demo', 'id_contacto', 'tipo_cliente', 'seg_importe_mensual', 'seg_fecha_pago',
        'seg_forma_pago', 'fecha_rescision', 'id_comercial', 'carpeta_finalizacion', 'estado_seo',
        'parametros_busqueda', 'suscrito_notificaciones', 'id_partner'
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
