<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\TransactionRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TransactionBackendController extends Controller
{
    public function __construct(protected readonly TransactionRepositoryInterface $repository)
    {
    }

    public function index(): Renderable
    {
        $transactions = $this->repository->getTransactions();

        return view('backend.domain.transactions.index', compact('transactions'));
    }

    public function show(int $key): Factory|View|Application
    {
        $transaction = $this->repository->showTransaction(key:  $key);

        return view('backend.domain.transactions.show', compact('transaction'));
    }
}
