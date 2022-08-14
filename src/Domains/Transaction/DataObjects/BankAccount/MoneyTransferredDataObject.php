<?php

namespace Domains\Transaction\DataObjects\BankAccount;

class MoneyTransferredDataObject
{
    public function __construct(
        readonly private string $uuid,
        readonly private int $amount,
    )
    {}

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'amount' => $this->amount,
        ];
    }
}
