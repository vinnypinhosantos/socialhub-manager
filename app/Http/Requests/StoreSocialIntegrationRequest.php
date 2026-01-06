<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialIntegrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'provider' => 'required|string|max:255',
            'account_id' => 'required|integer|exists:accounts,id',
            'status' => 'sometimes|string',
            'access_token' => 'required|string',
        ];
    }
}
