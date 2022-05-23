<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => ['required', 'max:255', 'unique:users'],
                'name' => ['required', 'string', 'max:255'],
                'nik' => ['required', 'unique:users', 'numeric', 'digits:16'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'description' => ['string'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'nik.unique'      => 'NIK sudah ada',
                'nik.digit'      => 'NIK harus berjumlah 16 digit',
                'password.min'      => 'password terlalu pendek',
                'email.unique'      => 'Email sudah ada',
                'username.unique'      => 'Username sudah ada',
            ]
        );



        $user = User::create([
            'username' => $request->username,
            'avatar' => 'png-transparent-user-profile-computer-icons-login-user-avatars.png',
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'description' => $request->description,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
