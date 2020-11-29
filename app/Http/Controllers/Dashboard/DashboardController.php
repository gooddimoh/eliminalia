<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function Index()
    {
        $user = new User();
        $user = $user->role();
        view('{role}admin.dashboard');
    }
}
