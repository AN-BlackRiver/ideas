<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticateRequest;
use App\Http\Requests\Auth\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(StoreRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('login')->with('success', 'Вы успешно зарегистрировались');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(AuthenticateRequest $request)
    {

        if (auth()->attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->route('index')->with('success', 'Вы успешно вошли в систему');
        }
        return back()->withErrors([
            'email' => 'Неправильный логин или пароль',
            'password' => ' ',
        ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index')->with('update', 'Вы вышли из системы');
    }
}
