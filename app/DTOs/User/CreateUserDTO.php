<?php

namespace App\DTOs\User;

use App\Enums\UserRole;

class CreateUserDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly UserRole $role,
        public readonly ?int $account_id = null,
    ) {}
}