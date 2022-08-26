<?php

declare(strict_types=1);

namespace App\Http\Controllers\UseCase\Auth\FacebookAuth\Interfaces;

interface FacebookAuthRepositoryInterface
{
    public function redirectToFacebook();

    public function authToFacebook();
}
