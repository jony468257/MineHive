<?php

namespace App\Http\Controllers\Features\Authorization;

use App\Helper\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * @return Factory|\Illuminate\Contracts\View\View|Application|View
     */
    public function index()
    {
        $roles = Role::all();
        $users = User::orderBy('id', 'desc')->get();
        return view('features.authorization.user.index', compact('users', 'roles'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required'],
            'phone' => ['max:11', 'unique:users'],
        ]);

        $profile = null;
        if ($request->profile) {
            $profile = FileUploadHelper::imageCustomization($request->profile, 300, 300, 'user_avatar');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->profile = $profile;
        $user->save();

        $user->assignRole($request->role);

        return Redirect::route('users.index')->with(['alert-type' => 'success', 'message' => 'User successfully created.']);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function show(Request $request)
    {
        $id = $request->input('id');
        return User::find($id);
    }

    /**
     * @param Request $request
     * @return Factory|\Illuminate\Contracts\View\View|Application|View
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $roles = Role::all();
        $user = User::find($id);

        return view('features.authorization.user.edit', compact('roles', 'user'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required'],
            'phone' => ['max:11'],
        ]);

        $user = User::find($id);

        $profile = null;
        if ($request->profile) {
            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
            $profile = FileUploadHelper::imageCustomization($request->profile, 300, 300, 'user_avatar');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->profile = $profile;
        $user->update();

        if ($request->role) {
            $user->roles()->detach();
            $user->assignRole($request->role);
        }

        return Redirect::route('users.index')->with(['alert-type' => 'success', 'message' => 'User successfully updated.']);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);
        if ($user->profile) {
            Storage::disk('public')->delete($user->profile);
        }
        $user->delete();

        return Redirect::route('users.index')->with(['alert-type' => 'success', 'message' => 'User successfully deleted.']);
    }
}
