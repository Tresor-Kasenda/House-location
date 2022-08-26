<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\UserRoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards): mixed
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role_id == UserRoleEnum::USERS_ROLE) {
                return redirect()->route('users.users.index');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == UserRoleEnum::DEALER_ROLE) {
                return redirect()->route('commissioner.backend.index');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == UserRoleEnum::ADMINS_ROLE) {
                return redirect()->route('admins.backend.index');
            }
        }

        return $next($request);
    }
}
