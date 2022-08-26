<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Mail\ConfirmedReservationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ConfirmedReservationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public $reservation)
    {
        //
    }

    public function handle()
    {
        Mail::to($this->reservation['address'])->send(new ConfirmedReservationEmail($this->reservation));
    }
}
