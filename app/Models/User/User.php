<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\Request;

class User extends Model
{
    use SoftDeletes, Notifiable, HasFactory;

    protected $table = 'users';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'name',
        'surname',
        'password',
        'phone',
        'email',
        'dni',
        'address',
        'postal_code',
        'city',
        'state',
        'permission_level',
    ];

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
        $validation = $request->validate([
            'file' => 'required|file|image|mimes:jpeg,png,gif,jpg|max:2048'
        ]);

        $file = $validation['file'];

        // Generate a file name with extension
        $fileName = 'profile-' . time() . '.' . $file->getClientOriginalExtension();

        // New Client
        // Create ID Client
        // Links Public Documents

        // Create Automatic Folders
        // Links
        // Public Documents
        // Private Documents (Internal)

        // Client Documents (public)
        // Private Documents (internal)

        $s3 = Storage::disk('s3');
        $filePath = '/uploads/media/' . $fileName;
        $s3->put($filePath, file_get_contents($file), 'public');

    }

    public function Create($data)
    {

        $user = new User;
        $user->name = $data->name;
        $user->surname = $data->surname;
        $user->password = $data->password;

        Storage::putFileAs();

        $user->phone = $data->phone;
        $user->email = $data->email;
        $user->dni = $data->dni;
        $user->address = $data->address;
        $user->postal_code = $data->postal_code;
        $user->city = $data->city;
        $user->state = $data->state;
        $user->permission_level = $data->permission_level;
        $user->save();

    }
}


