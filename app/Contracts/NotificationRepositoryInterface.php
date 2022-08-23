<?php

declare(strict_types=1);

namespace App\Contracts;

interface NotificationRepositoryInterface
{
    public function getNotifications();

    public function showNotification(int $id);

    public function marReadNotification();

    public function deleteNotification(int $key);
}
