<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->type);
        $this->validate($request, [
            "type" => "required",
            "first_name" => "required|max:225",
            "last_name" =>"required|max:225",
            "email" => "required|max:225",
            // 'password' => 'required|min:8|confirmed',
            "password" => "required|confirmed",
        ]);

        User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->type
        ]);

        Auth::attempt($request->only("email", "password"));
        if(auth()->user()->role === "desa driver" || auth()->user()->role === "desa loader") {

            return redirect()->route("desa.loader.profile");

        }else if(auth()->user()->role === "desa dispatcher" || auth()->user()->role === "desa dispatcher"){

            return redirect()->route("desa.dispatcher.profile");

        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ]);

        if(!Auth::attempt($request->only("email", "password"))) {
            return back()->with(["status" => "Invalid credentials"]);
        }

        if(auth()->user()->role === "desa driver" || auth()->user()->role === "desa loader") {

            return redirect()->route("desa.loader.profile");

        }else if(auth()->user()->role === "desa dispatcher" || auth()->user()->role === "desa dispatcher"){

            return redirect()->route("desa.dispatcher.profile");

        }
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(Request $request, $token)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            // 'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('reset-success', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
