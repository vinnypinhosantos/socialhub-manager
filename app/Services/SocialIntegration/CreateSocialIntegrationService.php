<?php

namespace App\Services\SocialIntegration;

use App\DTOs\SocialIntegration\CreateSocialIntegrationDTO;
use App\Models\SocialIntegration;

class CreateSocialIntegrationService
{
    public function execute(CreateSocialIntegrationDTO $data): SocialIntegration
    {
        $socialIntegration = SocialIntegration::create([
            'provider' => $data->provider,
            'access_token' => $data->access_token,
            'account_id' => $data->account_id,
            'status' => $data->status,
        ]);

        return $socialIntegration;
    }
}