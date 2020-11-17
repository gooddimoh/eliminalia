<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

    public function login()
    {
        var_dump($this);
        die(" ");
    }

    public function dashboard()
    {
        return view('pages/dashboard');
    }

    public function emailInbox()
    {
        return view('pages/email-inbox');
    }

    public function emailCompose()
    {
        return view('pages/email-compose');
    }

    public function emailDetail()
    {
        return view('pages/email-detail');
    }

    public function widget()
    {
        return view('pages/widget');
    }

    public function uiGeneral()
    {
        return view('pages/ui-general');
    }

    public function uiTypography()
    {
        return view('pages/ui-typography');
    }

    public function UserManagement()
    {
        $users = User::all();
        return view('dashboard/User Management')->with('users', $users);
    }

    public function TIMELINE()
    {
        return view('dashboard/TIMELINE');
    }

    public function MakePostToTimeline()
    {
        return view('dashboard/MakePostToTimeline');
    }

    public function ContactRegistration()
    {
        $user = User::all();
        return view('dashboard/contacts/Contact Registration')->with('users', $user);
    }

    public function INQUIRIES()
    {
        return view('dashboard/Contacts/INQUIRIES');
    }

    public function ContacList()
    {
        $users = User::all();
        return view('dashboard/Contacts/CONTACT LIST')->with('users', $users);
    }

    public function Calendar()
    {
        return view('dashboard/calendar');
    }

    public function Map()
    {
        return view('dashboard/MAP');
    }

    public function Filemanager()
    {
        return view('dashboard/FILE MANAGER');
    }

    public function login_page()
    {
        return view('auth/login');
    }

    public function registration_page()
    {
        return view('auth/register');
    }

}