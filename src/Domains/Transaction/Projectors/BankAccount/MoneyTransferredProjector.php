<?php

namespace Domains\Transaction\Projectors\BankAccount;

use Domains\Transaction\Actions\BankAccount\CreateBankAccountAction;
use Domains\Transaction\Actions\BankAccount\MoneyTransferredAction;
use Domains\Transaction\DataObjects\BankAccount\BankAccountDataObject;
use Domains\Transaction\DataObjects\BankAccount\MoneyTransferredDataObject;
use Domains\Transaction\Events\BankAccount\AccountCreated;
use Domains\Transaction\Events\BankAccount\MoneyTransferred;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class MoneyTransferredProjector extends Projector
{
    public function onMoneyTransferred(MoneyTransferred $event)
    {
        (new MoneyTransferredAction)->handle(
            dataObject: new MoneyTransferredDataObject(
                uuid: $event->aggregateRootUuid(),
                amount: $event->amount,
            )
        );
    }
}
