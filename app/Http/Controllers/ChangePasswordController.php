<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class ChangePasswordController extends Controller
{
    public function changePassword()
    {
        return view('resetpassword.index', [
            'title' => 'Reset Password'
        ]);
    }

    public function processChangePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);

            return redirect('/dashboard')->with('success', 'Password has been changed successfully.');
        } else {
            return back()->with('error', 'Invalid email or current password.');
        }
    }
}