<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links_Search extends Model {
    use HasFactory;

    protected $table = 'links_search';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id ',
        'enlace',
        'texto_a_buscar',
        'estado',
        'id_usuario',
        'fecha_actualizado'
    ];

    protected $visible = ['first_name', 'last_name'];

    protected $appends = ['is_admin'];

    protected $casts = [
        'birthday' => 'date:y-m-d',
        'joined_at' => 'datetime:y-m-d H:00',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Links()
    {
        $links = 'links';
        return $links;
    }

    public function index(){}

    public function index1(){}
    public function index2(){}
    public function index3(){}
    public function index4(){}
}
