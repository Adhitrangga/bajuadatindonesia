<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
{
    // Validate input
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]); 

    // Check credentials
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $products = Product::all();

        return redirect()->intended('dashboard')->with(compact('products'))->with('success', 'Login berhasil');
    }

    return back()->withErrors([
        'email' => 'Kredensial yang diberikan salah.',
    ]);
}


    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout berhasil');
    }

    // Menampilkan halaman registrasi (Opsional)
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi pengguna baru (Opsional)
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' will check for password_confirmation
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
