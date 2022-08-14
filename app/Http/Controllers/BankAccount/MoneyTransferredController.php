<?php

namespace App\Http\Controllers\BankAccount;

use App\Http\Controllers\Controller;
use Domains\Transaction\Aggregates\BankAccount\BankAccountAggregate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MoneyTransferredController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request): void
    {
        $account = auth()->user()->bankAccounts()->first();

        BankAccountAggregate::retrieve($account->uuid)
            ->moneyTransferred(
                $request->amount,
            )->persist();

        dump($account->refresh()->balance);
    }
}
