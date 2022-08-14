<?php

namespace App\Http\Controllers\BankAccount;

use App\Http\Controllers\Controller;
use Domains\Transaction\Aggregates\BankAccount\BankAccountAggregate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateBankAccountController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request): void
    {
        BankAccountAggregate::retrieve(Str::uuid())
            ->createAccount(
                auth()->user()->id,
            )->persist();

        dump(auth()->user()->bankAccounts);
    }
}
