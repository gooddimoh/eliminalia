<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->create($request->all());
        redirect()->back();
    }

    public function timeline()
    {
//        $timeline = Timeline::all();
//        return view("dashboard.superadmin.timeline.timeline")->with('timeline', $timeline);
        return view("dashboard.superadmin.timeline.index");
    }

}
