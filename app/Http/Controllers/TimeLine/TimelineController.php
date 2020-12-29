<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all();
        return view("dashboard.admin.timeline.index", compact('timelines', $timelines));
    }

    public function create(Request $request)
    {

    //   var_dump($request->all());
    //   var_dump($request->pjax());
    //   $timelines = Timeline::all();
    //   var_dump($request);
    //   var_dump($timelines);
    //   die();
    //   disk_free_space('');
    //   $data = $request->pjax();
    //   return view("dashboard.admin.timeline.index", compact('timelines', $timelines));

        return redirect()->back();
    }

    public function store(Request $request)
    {

        $this->create($request->all());
        redirect()->back('Write a comment...');
        redirect()->flush('Write a comment...');
    }

}

//commit
//commit
