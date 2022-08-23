<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\NotificationRepositoryInterface;

class NotificationRepository implements NotificationRepositoryInterface
{
    public function getNotifications()
    {
        return auth()->user()->unreadNotifications;
    }

    public function marReadNotification()
    {
        return auth()->user()->unreadNotifications->markAsRead();
    }

    public function deleteNotification(int $key)
    {
        return auth()->user()->unreadNotifications->delete();
    }

    public function showNotification(int $id)
    {
        // TODO: Implement showNotification() method.
    }
}
