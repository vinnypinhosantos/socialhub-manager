<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Services\User\CreateUserService;
use App\DTOs\User\CreateUserDTO;
use App\Enums\UserRole;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {

        return response()->json($user);
    }
    
    public function store(
        StoreUserRequest $request,
        CreateUserService $service
    ): mixed
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