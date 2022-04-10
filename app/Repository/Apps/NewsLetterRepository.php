<?php
declare(strict_types=1);

namespace App\Repository\Apps;

use App\Contracts\NewsLetterRepositoryInterface;
use Spatie\Newsletter\Newsletter;

class NewsLetterRepository implements NewsLetterRepositoryInterface
{
    public function send($request)
    {
        if (!Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribePending($request->email);
            return back();
        }
    }
}
