<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmedReservationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $reservation)
    {
        //
    }


    public function build(): ConfirmedReservationEmail
    {
        return $this
            ->from('info@karibukwako.com')
            ->to($this->reservation->email)
            ->subject("Confirmation de reservation")
            ->view('frontend.domain.email.confirmation')
            ->with('reservation', $this->reservation);
    }
}
