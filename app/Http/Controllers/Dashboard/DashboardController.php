<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function Index()
    {
        $user = new User();
        $user_role = $user->role();
        view("{$user_role}.admin.dashboard");
    }
}
