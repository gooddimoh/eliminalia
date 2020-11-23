<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    function action(Request $request)
    {
        if ($request->ajax()) {
            $data = Search::search($request->get('full_text_search_query'))->get();

            return response()->json($data);
        }
    }

}
