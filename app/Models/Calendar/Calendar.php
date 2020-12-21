<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'callendar';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'id', 'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $sources = [
        'model' => '\\App\\Models\\Event',
        'date_field' => 'start_time',
        'field' => 'attendees',
        'prefix' => 'Meeting with',
        'suffix' => '',
        'route' => 'admin.meetings.edit',
    ];

    public function index()
    {
        $events = [];

        $callendar = Calendar::all();

        foreach ($this->source as $source) {
            foreach ($source['model']::all() as $source) {
                $calendarEvents = $source['model']::when(request('venue_id') && $source['model'] == '\App\Event', function ($query) {
                    return $query->where('venue_id', request('venue_id'));
                })->get();
                foreach ($calendarEvents as $item) {
                    $crudFieldValue = $model->getOriginal($source['date_field']);
                    if (!$crudFieldValue) {
                        continue;
                    }
                }
                $events[] = [
                'title' => trim($source['prefix']) . " " . $model->{$source['field']} . " " . $source['suffix']),
                'start' => $crudFieldValue,
                'url'   => route($source['route'], $model->id),
            ];
            }
        }
    }

    public function index1(){}
    public function index2(){}
    public function index3(){}
    public function index4(){}

}

