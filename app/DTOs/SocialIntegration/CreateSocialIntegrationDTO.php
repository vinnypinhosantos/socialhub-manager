<?php

namespace App\DTOs\SocialIntegration;

use App\Enums\SocialIntegrationStatus;

class CreateSocialIntegrationDTO
{
    public function __construct(
        public readonly string $provider,
        public readonly string $access_token,
        public readonly int $account_id,
        public readonly string $status,
    ) {}
}