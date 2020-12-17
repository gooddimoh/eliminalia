<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $timeline = Timeline::all();
        return view("dashboard.admin.timeline.index");
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        // Create Time Line
        $this->create($request->all());
        redirect()->back();
    }

    public function timeline()
    {

    }

}
