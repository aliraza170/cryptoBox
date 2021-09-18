<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
        if(auth()->check() && auth()->user()->two_factor_code == NULL) {
            return redirect(RouteServiceProvider::HOME);
        }
        return view('auth.two-factor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'integer|required',
        ]);

        $user = auth()->user();

        if($request->input('two_factor_code') == $user->two_factor_code)
        {
            $user->resetTwoFactorCode();

            return redirect(RouteServiceProvider::HOME);
        }

        return redirect()->back()
            ->withErrors(['two_factor_code' =>
                'The two factor code you have entered does not match']);
    }

    public function resend()
    {
        $user = auth()->user();
        $user->generateTwoFactorCode();
        $user->sendTwoFactorCode();

        return redirect()->back()->withMessage('The two factor code has been sent again');
    }
}
