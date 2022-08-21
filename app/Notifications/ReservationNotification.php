<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public $reservation)
    {
        //
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->view('')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable): array
    {
        return [
            'transaction_code' => $this->reservation->transaction_code,
            'address' => $this->reservation->address,
            'price' => $this->reservation->house->price
        ];
    }
}
