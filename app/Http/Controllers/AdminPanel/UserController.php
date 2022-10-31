<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function storeInfo(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string',],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('panel.create.user.permissions', [
            'email' => $user->email
        ]);
    }

    public function storeUserPermissions(Request $request)
    {
        $request->validate([
            'is_admin' => ['required', 'string', 'in:on,off'],
            'is_office' => ['required', 'string', 'in:on,off'],
            'advertiser_number' => ['required', 'string'],
            'is_monitor' => ['required', 'string', 'in:on,off'],
            'can_show' => ['required', 'string', 'in:on,off'],
            'can_add' => ['required', 'string', 'in:on,off'],
            'can_edit' => ['required', 'string', 'in:on,off'],
            'can_cancel' => ['required', 'string'], 'in:on,off',
            'can_booking' => ['required', 'string', 'in:on,off'],
            'userstatus' => ['required', 'string', 'in:on,off'],
        ]);

        $user = User::where('email', $request->email)->first();

        dd($request->all(), $user);

        if ($user) {
            $user->update([
                'is_admin' => $request->is_admin == 'on' ? 1 : 0,
                'is_office' => $request->is_office == 'on' ? 1 : 0,
                'is_monitor' => $request->is_monitor == 'on' ? 1 : 0,
                'user_status' => $request->userstatus == 'on' ? 'active' : 'inactive',
                'can_add' => $request->can_add == 'on' ? 1 : 0,
                'can_edit' => $request->can_edit == 'on' ? 1 : 0,
                'can_cancel' => $request->can_cancel == 'on' ? 1 : 0,
                'can_show_all' => $request->can_show == 'on' ? 1 : 0,
                'can_booking' => $request->can_booking == 'on' ? 1 : 0,
                // 'can_send_sms' => $request->can_send_sms,
                'branch_ids' => [],
            ]);
        }

        return redirect()->route('panel.users');
    }


    public function update(Request $request)
    {
        dd('update');
    }

    public function delete(Request $request)
    {
        dd('delete');
    }
}
