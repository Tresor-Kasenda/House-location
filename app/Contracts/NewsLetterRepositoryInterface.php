<?php
declare(strict_types=1);

namespace App\Contracts;

interface NewsLetterRepositoryInterface
{
    public function send($request);
}
