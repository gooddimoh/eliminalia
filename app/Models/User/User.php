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
    const SUPERADMIN = 0;
    const ADMIN = 0;
    const RECEPTION = 0;
    const MANAGER = 0;
    const REGISTER = 0;
    const COMMERCIAL = 0;
    const SEO = 0;
    const SEO_REGISTER = 0;
    const PARTNER = 0;

    const BARCELONA = 0;
    const KIEV = 0;
    const CONSULTOR = 0;

    use HasFactory;

    protected $table = 'users';

    //    Default role SUPERADMIN
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

    public function Create()
    {
        $this->name = "name";
        var_dump($this);
        die();
    }

}


