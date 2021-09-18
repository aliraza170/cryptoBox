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
use Illuminate\Support\Str;

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
        $request->validate([
            'name' => ['required', 'string', 'max:125'],
            'email' => ['required','string','email','max:125','unique:users,email'],
            'phone' => ['required', 'string', 'min:9', 'max:125', 'unique:users,phone'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms_and_conditions' => ['accepted']
        ]);

        $user = User::create([
            'name' => Str::lower($request->name),
            'email' => Str::lower($request->email),
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('standard user');
        $user->generate_wallets();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
