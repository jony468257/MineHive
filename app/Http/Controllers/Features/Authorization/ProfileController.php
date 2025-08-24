<?php

namespace App\Http\Controllers\Features\Authorization;

use App\Helper\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function edit()
    {
        return view('features.authorization.profile.edit');
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

        return Redirect::route('users.index')->with(['alert-type' => 'success', 'message' => 'User successfully updated.']);
    }

    /**
     * @return Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|View
     */
    public function changePassword()
    {
        return view('features.authorization.profile.change-password');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|null
     */
    public function updatePassword(Request $request): ?RedirectResponse
    {
        $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $admin = User::find(Auth::user()->id);
                $admin->password = Hash::make($request->password);
                $admin->update();
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return Redirect::route('password.updated');
            }
            return Redirect::back()->with(['alert-type' => 'error', 'message' => 'New password cannot be the same as old password.']);
        }
        return Redirect::back()->with(['alert-type' => 'error', 'message' => 'Current password not match.']);
    }
}
