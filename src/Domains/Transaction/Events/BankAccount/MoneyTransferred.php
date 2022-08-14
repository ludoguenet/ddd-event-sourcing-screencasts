<?php

namespace Domains\Transaction\Events\BankAccount;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class MoneyTransferred extends ShouldBeStored
{
    public function __construct(
        public int $amount,
    ){}
}
