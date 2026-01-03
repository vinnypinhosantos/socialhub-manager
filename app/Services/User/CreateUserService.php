<?php

namespace App\Services\User;

use App\Models\User;
use App\DTOs\User\CreateUserDTO;

class CreateUserService
{
    public function execute(CreateUserDTO $dto)
    {
        $user = User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
            'role' => $dto->role,
            'account_id' => $dto->account_id,
        ]);

        return $user;
    }
}