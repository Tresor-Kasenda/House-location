<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Contracts\InvoiceRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;

class InvoiceUserController extends Controller
{
    public function __construct(protected readonly InvoiceRepositoryInterface $repository)
    {
    }

    public function __invoke(InvoiceRequest $invoiceRequest)
    {
    }
}
