<?php

namespace Domains\Transaction\Aggregates\BankAccount;

use Domains\Transaction\Events\BankAccount\AccountCreated;
use Domains\Transaction\Events\BankAccount\MoneyTransferred;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class BankAccountAggregate extends AggregateRoot
{
    protected int $balance = 0;

    public function createAccount(int $userId): self
    {
        $this->recordThat(
            new AccountCreated(
                $userId,
            )
        );

        return $this;
    }

    public function moneyTransferred(int $amount): self
    {
        if ($this->balancrrre >= 2000) dump('You have transferred at least 2K €');

        $this->recordThat(
            new MoneyTransferred(
                $amount,
            )
        );

        return $this;
    }

    public function applyMoneyTransferred(MoneyTransferred $event)
    {
        $this->balance += $event->amount;
    }
}
