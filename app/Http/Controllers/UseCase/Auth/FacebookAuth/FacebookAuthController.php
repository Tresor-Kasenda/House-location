<?php

declare(strict_types=1);

namespace App\Http\Controllers\UseCase\Auth\FacebookAuth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UseCase\Auth\FacebookAuth\Interfaces\FacebookAuthRepositoryInterface;

class FacebookAuthController extends Controller
{
    public function __construct(protected FacebookAuthRepositoryInterface $repository)
    {
    }

    public function redirectToFacebook()
    {
        return $this->repository->authToFacebook();
    }

    public function authToFacebook()
    {
        return $this->repository->redirectToFacebook();
    }
}
