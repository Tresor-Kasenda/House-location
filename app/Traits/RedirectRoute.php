<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\UserRoleEnum;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

trait RedirectRoute
{
    protected string $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(): string
    {
        switch(Auth::user()->role_id){
            case UserRoleEnum::ADMINS:
                $this->redirectTo = route('');
                return $this->redirectTo;
                break;
            case UserRoleEnum::COMMISSIONNERS:
                $this->redirectTo = route('');
                return $this->redirectTo;
                break;
            case UserRoleEnum::USERS:
                $this->redirectTo = route('');
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = route('login');
                return $this->redirectTo;
        }
    }
}
