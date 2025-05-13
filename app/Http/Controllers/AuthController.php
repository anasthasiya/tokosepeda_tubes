<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        $loginType = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$loginType => $credentials['username'], 'password' => $credentials['password']])) {
            $user = Auth::user();

            return $user->role === 'admin'
                ? redirect()->route('dashboard')
                : redirect()->route('home');
        }
        return back()->withErrors(['username' => 'Username/email atau password salah.']);
    }
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'nomor_telepon' => 'required|string|max:15',
            'password' => 'required|string|min:6',
        ]);
        $role = 'user';

        $adminCount = User::where('role', 'admin')->count();
        if ($adminCount === 0) {
            $role = 'admin'; 
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'password' => Hash::make($request->password),
            'role' => $role,
        ]);
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
