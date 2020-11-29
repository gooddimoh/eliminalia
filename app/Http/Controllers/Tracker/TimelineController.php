<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
    }

    public function store()
    {
    }

    public function timeline()
    {
        $role = '';
        return view("dashboard.$role.timeline.timeline");
    }
}
