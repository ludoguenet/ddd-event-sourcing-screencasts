<?php

namespace Domains\Transaction\DataObjects\BankAccount;

class BankAccountDataObject
{
    public function __construct(
        readonly private string $uuid,
        readonly private int $userId,
    )
    {}

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'userId' => $this->userId,
        ];
    }
}
