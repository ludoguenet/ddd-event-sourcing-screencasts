<?php

namespace Domains\Transaction\Events\BankAccount;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class AccountCreated extends ShouldBeStored
{
    public function __construct(
        public int $userId,
    ){}
}
