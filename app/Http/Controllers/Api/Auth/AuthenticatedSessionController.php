<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthenticatedSessionController extends ApiController
{
    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $token = $request->cookie('auth_token');

        $accessToken = PersonalAccessToken::findToken($token);

        if ($accessToken || $accessToken?->tokenable) {
            $user = $accessToken->tokenable;
            Auth::login($user);

            return response()->json([
                'success' => true,
                'token' => $token,
                'data' => Auth::user(),
            ]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user?->createToken('crm')->plainTextToken;

            $cookie = cookie('auth_token', $token, 60 * 24 * 365);

            return response()->json([
                'success' => true,
                'token' => $token,
                'data' => $user
            ])->withCookie($cookie);
        }

        return $this->unauthorizedError('Unauthorised.', ['error' => 'Unauthorised']);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request): JsonResponse
    {
        Auth::guard('api')->logout();

        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }

    /**
     * @return JsonResponse
     */
    public function unauthorized(): JsonResponse
    {
        return $this->unauthorizedError('Unauthorised.', ['error' => 'Unauthorised']);
    }
}
