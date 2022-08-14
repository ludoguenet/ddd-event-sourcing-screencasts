<?php

namespace Domains\Transaction\Providers;

use Domains\Transaction\Projectors\BankAccount\AccountCreatedProjector;
use Domains\Transaction\Projectors\BankAccount\MoneyTransferredProjector;
use Illuminate\Support\ServiceProvider;
use Spatie\EventSourcing\Facades\Projectionist;

class BankAccountProvider extends ServiceProvider
{
    public function register()
    {
        Projectionist::addProjectors([
            AccountCreatedProjector::class,
            MoneyTransferredProjector::class
        ]);
    }
}
