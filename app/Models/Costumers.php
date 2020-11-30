<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumers extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'Costumers';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id',
        'date',
        'permission_level',
        'commercial_id ',
        'name',
        'surnames',
        'company name',
        'dni',
        'commercial_id ',
        'cif',
        'country',
        'city',
        'province',
        'address',
        'postal code',
        'phone',
        'phone2',
        'email',
        'email2',
        'customer_remarks',
        'manager_remarks',
        'commercial_remarks',
        'language',
        'budget',
        'form_pagos',
        'trace_done',
        'budget done',
        'client_signed',
        'scrapped',
        'contact_making',
        'documentation submitted',
        'discarded_reason',
        'date_signed',
        'discarded_date'
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

