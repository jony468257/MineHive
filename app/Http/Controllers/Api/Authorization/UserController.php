<?php

namespace App\Http\Controllers\Api\Authorization;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends ApiController
{
    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function user(Request $request, $id = null): JsonResponse
    {
        $user = $request->user();
        $m = 'User successfully retrieved for logged user.';
        if ($id) {
            $user = User::find($id) ?: [];
            $m = $user ? "User successfully retrieved for the id: $id." : "User not found for the id: $id.";
        }

        return $this->sendResponse($user, $m);
    }

    /**
     * @return JsonResponse|null
     */
    public function users(): ?JsonResponse
    {
        try {
            return $this->sendResponse(UserResource::collection(User::all()), 'Users retrieved successfully.');
        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse|null
     */
    public function update(Request $request, $id): ?JsonResponse
    {
        try {
            $user = User::findOrFail($id);
            $input = $request->all();

            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
            if ($request->hasFile('profile')) {
                $file = $request->file('profile');
                $name = 'user_avatar/user' . '_' . time() . '.' . $file->extension();
                Storage::disk('public')->put($name, file_get_contents($file));
                $input['profile'] = $name;
            }
            $user->update($input);

            if ($request->has('role')) {
                $user->syncRoles($request->role);
            }

            return $this->sendResponse(new UserResource($user), 'Profile update successfully.');
        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse|null
     */
    public function assignRole(Request $request, $id): ?JsonResponse
    {
        try {
            $user = User::find($id);
            $user->assignRole($request->roles);
            $names = str_replace(['\\','"'], '', json_encode($request->roles, JSON_THROW_ON_ERROR));
            return $this->sendMessage("Roles $names assigned successfully.");
        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse|null
     */
    public function passwordChange(Request $request, $id): ?JsonResponse
    {
        $request->validate([
            'current' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        try {
            $oldPass = Auth::user()->password;
            if (Hash::check($request->current, $oldPass)) {
                if (!Hash::check($request->password, $oldPass)) {
                    $user = User::find(Auth::user()->id);
                    $user->password = Hash::make($request->password);
                    $user->update();

                    Auth::guard('api')->logout();
                    $request->user()->currentAccessToken()->delete();

                    return $this->sendMessage('Password successfully updated.');
                }

                return $this->sendMessage('New password cannot be the same as old password.', true, 'warning', 401);
            }
            return $this->sendMessage('Current password not match.', false, 'error', 500);

        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $user = User::find($id);
        if ($user) {
            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
            $user->delete();
            return $this->sendResponse(["User Name: $user->name"], 'User deleted successfully.');
        }
        return $this->sendMessage('User not found.', false, 'error', 500);
    }
}
