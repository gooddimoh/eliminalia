<?php
namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Model
{
    use SoftDeletes, Notifiable, HasFactory;

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
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Storage::makeDirectory('/userassets/' . $user->id);
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
