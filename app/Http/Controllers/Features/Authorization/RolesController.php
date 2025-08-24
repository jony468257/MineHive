<?php

namespace App\Http\Controllers\Features\Authorization;

use App\Helper\AuthorizationHelper;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::where([['id', '!=', 1], ['name', '!=', 'super-admin']])->orderBy('id', 'desc')->get();
        return view('features.authorization.role.index', compact('roles'));
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::where('id', '!=', 1)->orderBy('id', 'desc')->get();
        $groups = AuthorizationHelper::getPermissionGroup();
        return view('features.authorization.role.create', compact('roles', 'groups'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:100', 'unique:roles']
        ]);

        $role = Role::create(['name' => $request->name]);
        $permissions = $request->permissions;
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return Redirect::route('roles.index')->with(['alert-type' => 'success', 'message' => 'Role successfully created.']);
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $role = Role::findById($id);
        $permissions = Permission::all();
        $groups = AuthorizationHelper::getPermissionGroup();
        $roles = Role::where('id', '!=', 1)->orderBy('id', 'desc')->get();
        return view('features.authorization.role.edit', compact('role', 'permissions', 'groups', 'roles'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $role = Role::findById($id);
        $role->name = $request->name;
        $role->update();
        $permissions = $request->permissions;
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return Redirect::route('roles.index')->with(['alert-type' => 'success', 'message' => 'Role successfully updated.']);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        Role::findById($id)?->delete();
        return Redirect::route('roles.index')->with(['alert-type' => 'success', 'message' => 'Role successfully deleted.']);
    }
}
