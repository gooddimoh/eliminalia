<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Contact_Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user_contacts_book';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'fecha', 'id_contacto', 'id_usuario'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function index(){}

    public function index1(){}
    public function index2(){}
    public function index3(){}
    public function index4(){}

}
