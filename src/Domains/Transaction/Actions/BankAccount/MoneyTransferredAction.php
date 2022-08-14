<?php

namespace Domains\Transaction\Actions\BankAccount;

use App\Models\BankAccount;
use Domains\Transaction\DataObjects\BankAccount\BankAccountDataObject;
use Domains\Transaction\DataObjects\BankAccount\MoneyTransferredDataObject;

class MoneyTransferredAction
{
    public function handle(
        MoneyTransferredDataObject $dataObject
    )
    {
        $account = BankAccount::whereUuid(data_get($dataObject->toArray(), 'uuid'))->first();

        $account->balance += data_get($dataObject->toArray(), 'amount');

        $account->save();
    }
}
