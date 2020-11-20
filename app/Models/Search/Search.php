<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class Search extends Model
{
    use SoftDeletes, Notifiable, HasFactory;

    public function __construct(UploadedFile $uploadedFile, $disk = 'local')
    {
        parent::__construct($attributes);
        self::created(function (User $user) {
            $registrationRole = config('panel.registration_default_role');
            if (!$user->roles()->get()->contains($registrationRole)) {
                $user->roles()->attach($registrationRole);
            }
        });
        $this->uploadedFile = $uploadedFile;
        $this->originalName = $uploadedFile->getClientOriginalName();
        $this->disk = $disk;
    }

    protected $table = 'Users';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'password',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function create(Request $request, array $data)
    {
        $request->valid();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Storage::makeDirectory('/userassets/' . $user->id);
        Storage::makeDirectory('/userassets/' . $user->id . "/img");
        Storage::makeDirectory('/userassets/' . $user->id . "/intro");
        Storage::makeDirectory('/userassets/' . $user->id . "/logo");
        Storage::makeDirectory('/userassets/' . $user->id . "/videos");

        return $user;
    }


    public function save(array $options = array())
    {
        $this->storeToDisk();
        return parent::save($options);
    }

    protected function storeToDisk()
    {
        Storage::disk($this->disk)->put(
            $this->getAttribute('name'),
            file_get_contents($this->uploadedFile->getRealPath())
        );
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
