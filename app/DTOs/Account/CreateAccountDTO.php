<?php

namespace App\DTOs\Account;

class CreateAccountDTO
{
    public function __construct(
        public readonly string $name,
    ) {}
}