<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Timeline extends Model
{
    use HasFactory;

    protected $table = 'timeline';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'date',
        'time',
        'text',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function timeline()
    {
        echo "timeline";
    }

    public function index(){}

    public function index1(){}
    public function index2(){}
    public function index3(){}
    public function index4(){}

}
