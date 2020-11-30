<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\TagFactory;
use App\Models\Comment;

class MainController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {

    }

    public function Dashboard(Request $request)
    {
<<<<<<< HEAD
        $data = '';
        $articles = '';
        $popular = '';
=======

        $session = Session::all();
        var_dump($session);

//        die('');

        $data = 'data';
        data_fill($data);

//        $user->isAdmin;

>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
        return view('dashboard.admin.dashboard');
    }

    public function MakePostToTimeline(Request $request)
    {
    }

    public function UserManagement()
    {
        return view('dashboard.admin.dashboard');
    }

    public function Contact(Request $request)
    {
        return view('dashboard.admin.dashboard');
    }

    public function Inquiries(Request $request)
    {
        return view();
    }

    public function ContactRegistration(Request $request)
    {
        return view();
    }

    public function ContactList(Request $request)
    {
        return view();
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

    public function Calendar(Request $request)
    {
        return view('dashboard.admin.calendar');
    }

    public function Map(Request $request)
    {
        return view('dashboard.admin.map');
    }

    public function FileManager(Request $request)
    {
        return view('');
    }

    public function Auth()
    {
<<<<<<< HEAD
        return view('');
=======
        return view();
        redirect()->route('')
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
    }

}
