<?php
namespace App\Http\Middleware;

use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Closure;

class ApprovalMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->approved) {
                auth()->logout();

                return redirect()->route('login')->with('message', trans('global.yourAccountNeedsAdminApproval'));
            }
        }

    //        Role Manager

        return $next($request);
    }
}
