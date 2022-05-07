<?php
declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\UpdateUserRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;

class UpdateUserController extends Controller
{
    public function __construct(public UpdateUserRepositoryInterface $repository){}

    public function update(string $key, UpdateUserRequest $request)
    {

    }
}
