<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy\DummyUser;

class UserAuthController extends Controller
{
    public function showLogin()
    {
        return view('user.authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        foreach (DummyUser::users() as $user) {

            if (
                $request->email === $user['email'] &&
                $request->password === $user['password']
            ) {

                session([
                    'is_login' => true
                ]);

                return redirect()->route('dashboard');
            }
        }

        return back()->with(
            'error',
            'Email atau password salah'
        );
    }

    public function logout()
    {
        session()->forget([
            'is_login'
        ]);

        return redirect()->route('login');
    }
}
