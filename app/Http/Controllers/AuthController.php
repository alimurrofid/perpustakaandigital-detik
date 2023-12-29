<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function store(StoreUserRequest $request)
    {
        try {
            User::create([
                'name' => $request->validated('name'),
                'username' => $request->validated('username'),
                'email' => $request->validated('email'),
                'password' => Hash::make($request->validated('password')),
            ]);

            Alert::success('Success', 'Register berhasil');
            return redirect()->route('login');
        } catch (\Throwable $e) {
            Alert::error('Error', 'Register gagal');
            return redirect()->back();
        }
    }
    public function authenticate(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);


        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            $request->session()->regenerate();
            Alert::toast('Selamat datang ' . auth()->user()->name, 'success');
            return redirect()->route('dashboard.home');
        }
        Alert::toast('Username atau password salah', 'error');
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Anda berhasil logout', 'success');
        return redirect()->route('login');
    }
}
