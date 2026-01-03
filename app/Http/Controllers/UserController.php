<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Services\User\CreateUserService;
use App\DTOs\User\CreateUserDTO;
use App\Enums\UserRole;

class UserController extends Controller
{
    public function store(
        StoreUserRequest $request,
        CreateUserService $service
    )
    {
        $dto = new CreateUserDTO(
            name: $request->input('name'),
            email: $request->input('email'),
            password: $request->input('password'),
            role: UserRole::from($request->input('role')),
            account_id: $request->input('account_id'),
        );

        $user = $service->execute($dto);

        return response()->json($user, 201);
    }
}