<?php

namespace Domains\Transaction\Projectors\BankAccount;

use Domains\Transaction\Actions\BankAccount\CreateBankAccountAction;
use Domains\Transaction\DataObjects\BankAccount\BankAccountDataObject;
use Domains\Transaction\Events\BankAccount\AccountCreated;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class AccountCreatedProjector extends Projector
{
    public function onAccountCreated(AccountCreated $event)
    {
        (new CreateBankAccountAction)->handle(
            dataObject: new BankAccountDataObject(
                uuid: $event->aggregateRootUuid(),
                userId: $event->userId,
            )
        );
    }
}
