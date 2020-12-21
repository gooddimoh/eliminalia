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
        'id', 'fecha', 'contact_type', 'tipo_contacto', 'communication_media_id',
        'company_name', 'cif', 'position', 'Name', 'surnames', 'dni', 'country',
        'city', 'Province', 'address', 'postal_code', 'phone', 'phone2',
        'e-mail', 'email2', 'web', 'observations', 'language', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function index1(){}
    public function index2(){}
    public function index3(){}
    public function index4(){}
}
