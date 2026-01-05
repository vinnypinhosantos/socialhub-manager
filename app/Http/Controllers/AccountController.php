<?php

namespace App\Http\Controllers;

use App\DTOs\Account\CreateAccountDTO;
use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use App\Services\Account\CreateAccountService;

class AccountController extends Controller
{
    public function show(Account $account)
    {
        return response()->json($account);
    }
    
    public function store(
        StoreAccountRequest $request,
        CreateAccountService $createAccountService
    ) {
        $dto = new CreateAccountDTO(name: $request->input('name'));

        $account = $createAccountService->execute($dto);

        return response()->json($account, 201);
    }
}