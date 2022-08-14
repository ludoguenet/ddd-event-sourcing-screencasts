<?php

namespace Domains\Transaction\Actions\BankAccount;

use App\Models\BankAccount;
use Domains\Transaction\DataObjects\BankAccount\BankAccountDataObject;

class CreateBankAccountAction
{
    public function handle(
        BankAccountDataObject $dataObject
    )
    {
        BankAccount::create([
            'uuid' => data_get($dataObject->toArray(), 'uuid'),
            'user_id' => data_get($dataObject->toArray(), 'userId'),
        ]);
    }
}
