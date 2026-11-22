<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (session('logged_in')) {
            return redirect('/home');
        }

        return view('login');
    }

    public function cek(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();
            session([
                'email' => $user->email,
                'nama' => $user->nama,
                'logged_in' => true,
            ]);

            return redirect('/home');
        }

        return back()->withInput($request->only('email'))
            ->with('gagal', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
