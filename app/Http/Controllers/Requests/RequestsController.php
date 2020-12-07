<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function finalizate_files()
    {
        return view('dashboard.admin.requests.finalizate_files');
    }

    public function withdraw_contracts()
    {
        return view('dashboard.admin.requests.withdraw_contracts');
    }
}
