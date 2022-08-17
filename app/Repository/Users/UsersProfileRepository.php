<?php
declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\UpdateUserRepositoryInterface;
use App\Contracts\UsersProfileRepositoryInterface;
use App\Models\User;
use App\Traits\ImageUploader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UsersProfileRepository implements UpdateUserRepositoryInterface
{

    public function updated(string $key, $request): RedirectResponse
    {
        $user = User::query()
            ->where('id', '=', $key)
            ->first();

        $user->update([
            'email' => $request->input('email'),
            'name' => $request->input('username'),
            'password' => Hash::make($request->input('password'))
        ]);
        return back();
    }
}
