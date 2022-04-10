<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\UserRoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == UserRoleEnum::USERS) {
            return redirect()->route('users.backend.index');
        }

        if (Auth::user()->role_id == UserRoleEnum::COMMISSIONNERS) {
            return redirect()->route('commissioner.backend.index');
        }

        if (Auth::user()->role_id == UserRoleEnum::ADMINS){
            return $next($request);
        }
    }
}
