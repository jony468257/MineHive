<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class RegisteredUserController extends ApiController
{
    /**
     * @param Request $request
     * @return JsonResponse|null
     */
    public function store(Request $request): ?JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return $this->sendValidationError('Validation Error', $validator->errors());
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if ($request->has('role')) {
                $user->assignRole($request->role);
            }

            $token = $user->createToken('crm')->plainTextToken;

            $cookie = cookie('auth_token', $token, 60 * 24 * 365);

            return response()->json(['user' => $user, 'token' => $token])->withCookie($cookie);

        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }
}
