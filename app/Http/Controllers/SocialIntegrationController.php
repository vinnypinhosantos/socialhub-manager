<?php 

namespace App\Http\Controllers;

use App\Http\Requests\StoreSocialIntegrationRequest;
use App\Services\SocialIntegration\CreateSocialIntegrationService;
use App\DTOs\SocialIntegration\CreateSocialIntegrationDTO;
use App\Models\SocialIntegration;

class SocialIntegrationController extends Controller
{
    public function show(SocialIntegration $integration)
    {
        return response()->json($integration);
    }

    public function store(
        StoreSocialIntegrationRequest $request,
        CreateSocialIntegrationService $createSocialIntegrationService
    )
    {
        $dto = new CreateSocialIntegrationDTO(
            provider: $request->input('provider'),
            account_id: $request->input('account_id'),
            access_token: $request->input('access_token'),
            status: $request->input('status', 'active'),
        );
        $integration = $createSocialIntegrationService->execute($dto);

        return response()->json($integration, 201);
    }
}