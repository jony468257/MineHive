<?php

namespace App\Http\Controllers\Api\Authorization;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\RoleResource;
use Database\Seeders\Permissions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RoleController extends ApiController
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->sendResponse(new RoleResource(Role::all()), 'All roles retrieved successfully.');
    }

    /**
     * @param Request $request
     * @return JsonResponse|null
     */
    public function store(Request $request): ?JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError('Validation Error', $validator->errors());
        }

        try {
            $role = Role::create(['name' => $request->name]);
            if ($request->permissions) {
                $role->syncPermissions($request->permissions);
            }

            return $this->sendResponse(new RoleResource($role), 'Roles created successfully.');
        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $role = Role::find($id) ?: [];
        return $this->sendResponse(new RoleResource($role), "Role successfully retrieved for the id: $id.");
    }


    /**
     * @param Request $request
     * @param string $id
     * @return JsonResponse|null
     */
    public function update(Request $request, string $id): ?JsonResponse
    {
        try {
            $role = Role::find($id);

            if ($request->name) {
                $role->update(['name' => $request->name]);
            }

            if ($request->permissions) {
                $role->syncPermissions($request->permissions);
            }

            return $this->sendResponse(new RoleResource($role), 'Roles update successfully.');
        } catch (\Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        Role::find($id)->delete();
        return $this->sendMessage('Role deleted successfully.');
    }
}
