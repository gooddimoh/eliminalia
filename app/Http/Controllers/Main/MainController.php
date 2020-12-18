<?php
namespace App\Http\Controllers;

use App\Http\Controllers\API\AuthController;
use phpDocumentor\Reflection\DocBlock\TagFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Comment;
use App\Models\User;

class MainController extends Controller {

    public function __construct()
    {
    }

    public function index()
    {
        $comment = Comment::all();
        $post = 'post';
    }

    public function Dashboard(Request $request)
    {
        $data = '';
        $articles = '';
        $popular = '';
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

    public function Auth(Request $request)
    {
        return view('');
    }
}