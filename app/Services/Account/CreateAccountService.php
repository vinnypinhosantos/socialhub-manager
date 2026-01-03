<?php

namespace App\Services\Account;

use App\DTOs\Account\CreateAccountDTO;
use App\Models\Account;
use App\Enums\AccountStatus;

class CreateAccountService
{
    public function execute(CreateAccountDTO $dto):Account
    {
        $account = Account::create([
            'name' => $dto->name,
            'status' => AccountStatus::ACTIVE,
        ]);

        return $account;
    }
}