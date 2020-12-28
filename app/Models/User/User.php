<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\Request;
//use File

class User extends Model
{
    const SUPERADMIN = 0;
    const ADMIN_SUCURSAL = 0;
    const ADMIN = 0;
    const ALTA_CONTRATOS = 0;
    const RASTREADOR = 0;
    const COMERCIAL = 0;
    const PARTNER = 0;
    const MANAGER = 0;

    use HasFactory;

    protected $table = 'users';

    protected $role = 'SUPERADMIN';

    protected $hidden = [
        'password',
    ];
    protected $guarded = [];

    protected $fillable = [
        'name',
        'password',
        'phone',
        'email',
        'dni',
        'address',
        'postal_code',
        'city',
        'state',
        'permission_level'
    ];

    public $timestamps = false;

    public function disproduct()
    {
    }

    public function Save(array $options = array())
    {
        return parent::save($options);
    }

    public function Data()
    {
        return $this->morphedByMany('App\Models\Role', '');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User')->withDefault(function ($user, $post) {
            $user->name = 'Guest Author';
        });
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function UploadFiles(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new File;

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()->with('success', 'File has been uploaded.')->with('file', $fileName);
        }

    }

    public function Create(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'reuired|max:255',
            'email' => 'reuired|max:255|unique:users',
            'password' => 'reuired|min:8|max:255'
        ]);

        $this->name = "name";
        var_dump($this);
        die();
    }

}


