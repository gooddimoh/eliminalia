<?php

namespace App\Http\Controllers;

use App\Models\User;

class MainController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();
        }
    }

    public function markNotification(Request $request)
    {
        auth()->user()->unreadNotifications->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })->markAsRead();

        return response()->noContent();
    }

    public function dashboard()
    {
        return view('dashboard/dashboard');
    }

    public function UserManagement()
    {
        $users = User::all();
        return view('dashboard/contacts/Contact Registration')->with('users', $users);
    }

    public function Timeline()
    {
        return view('dashboard/timeline');
    }

    public function MakePostToTimeline()
    {
        return view('dashboard/makeposttotimeline');
    }

    public function Contact()
    {
        $user = User::all();
        return view('dashboard/contacts/contact registration')->with('users', $user);
    }

    public function Inquiries()
    {
        return view('dashboard/Contacts/inquiries');
    }

    public function ContactRegistration()
    {
        return view('dashboard/contacts/contact registration');
    }

    public function ContactList()
    {
        return view('dashboard/contacts/contact list');

//        $users = User::all();
//        return view('dashboard/contacts/contact list')->with('users', $users);
    }

    public function SelectSearch(Request $request)
    {
        $movies = [];
        if ($request->has('id')) {
            $search = $request->id;
            $movies = Movie::select("id", "name")->where('name', 'LIKE', "%$search%")->get();
        }
        return response()->json($movies);
    }

    public function Calendar()
    {
        return view('dashboard/calendar');
    }

    public function Map()
    {
        return view('dashboard/map');
    }

    public function Filemanager()
    {
        return view('dashboard/file manager');
    }

    public function Login_page()
    {
        return view('auth/login');
    }

    public function Registration_page()
    {
        return view('auth/register');
    }

}