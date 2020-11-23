<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notification extends Controller
{
    public function index()
    {
    }

    public function store()
    {

    }

    public function markNotification(Request $request)
    {
        auth()->user()->unreadNotifications->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })->markAsRead();
        return response()->noContent();
    }

}
