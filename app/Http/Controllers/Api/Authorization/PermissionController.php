<?php

namespace App\Http\Controllers\Api\Authorization;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\CommonResource;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends ApiController
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->sendResponse(new CommonResource(Permission::all()), 'All permission retrieved successfully.');
    }


    /**
     * @param Request $request
     * @return JsonResponse|null
     */
    public function store(Request $request): ?JsonResponse
    {
        try {
            foreach ($request->permissions as $permission) {
                $permission = json_decode(json_encode($permission, JSON_THROW_ON_ERROR), false, 512, JSON_THROW_ON_ERROR);
                $group = $permission->group_name;
                foreach ($permission->permissions as $name) {
                    Permission::create(['name' => $name, 'group_name' => $group]);
                }
            }
            return $this->sendMessage('All permissions created successfully.');
        } catch (Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $permission = Permission::find($id) ?: [];
        return $this->sendResponse(new CommonResource($permission), "Permission successfully retrieved for the id: $id.");
    }

    /**
     * @param Request $request
     * @param string $id
     * @return JsonResponse|null
     */
    public function update(Request $request, string $id): ?JsonResponse
    {
        try {
            $permission = Permission::find($id);

            $permission->update(['name' => $request->name, 'group_name' => $request->group_name]);

            return $this->sendResponse(new CommonResource($permission), 'Permission update successfully.');
        } catch (Exception $e) {
            return $this->sendMessage($e->getMessage(), false, 'error', 500);
        }
    }

    /**
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        Permission::where('id', $id)->delete();

        return $this->sendMessage('Permission deleted successfully.');
    }
}
