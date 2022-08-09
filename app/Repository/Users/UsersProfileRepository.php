<?php
declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\UpdateUserRepositoryInterface;
use App\Contracts\UsersProfileRepositoryInterface;
use App\Models\User;
use App\Traits\ImageUploader;

class UsersProfileRepository implements UpdateUserRepositoryInterface
{
    use ImageUploader;

    public function updated(string $key, $request)
    {
        $user = User::query()
            ->where('key', '=', $key)
            ->first();
        if (!$user->images) $this->removePathOfImages(model: $user);

        $user->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'lastName' => $request->input('lastName'),
            'images' => self::uploadFiles(request: $request),
        ]);
    }
}
