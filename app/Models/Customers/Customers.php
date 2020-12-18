<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const manager = "Ruben Galvez";
    const personal_company = "Ruben Galvez";
    const customer_type = "Ruben Galvez";
    const group = "GENERAL, BARCELONA branch";
    const native_language = "Ruben Galvez";
    const partner = "GP TRADERS";

    protected $table = 'customers';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function index(){
    }
}

