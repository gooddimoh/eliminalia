<?php
namespace App\Http\Controllers;

use App\Http\Controllers\API\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\TagFactory;

class MainController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth', 'role', 'permissions');
//    }

    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $role = auth()->role();
        }
    }

    public function Dashboard(Request $request)
    {
        return view('dashboard.admin.dashboard');
    }

    public function MakePostToTimeline(Request $request)
    {
    }

    public function Contact(Request $request)
    {
        return view('dashboard.admin.dashboard');
    }

    public function Inquiries(Request $request)
    {
        Inquiries::class;
    }

    public function ContactRegistration(Request $request)
    {
        ContactRegistration::class;
    }

    public function ContactList(Request $request)
    {
        ContactList::class;
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
        return view('dashboard/calendar');
    }

    public function Map(Request $request)
    {
        return view('dashboard/map');
    }

    public function FileManager(Request $request)
    {
        FileManager::Index();
    }

    public function Auth()
    {
        AuthController::login();
        AuthController::register();
    }

}