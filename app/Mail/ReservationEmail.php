<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    public function __construct(public $reservation)
    {
    }

    public function build(): ReservationEmail
    {
        return $this
            ->from('info@karibukwako.com')
            ->to($this->reservation->email)
            ->subject("Reservation")
            ->view('frontend.domain.email.reservation')
            ->with('reservation', $this->reservation);
    }
}
