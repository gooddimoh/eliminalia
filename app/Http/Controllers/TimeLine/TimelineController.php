<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $timeline = Timeline::all()->zip();
        return view("dashboard.admin.timeline.index");
    }

    public function create(Request $request)
    {
        $data = $request->all();
        var_dump($data);
    }

    public function store(Request $request)
    {

        $this->create($request->all());
        redirect()->back();
    }

}
