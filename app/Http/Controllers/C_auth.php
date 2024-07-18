<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class C_auth extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Form Login',
        );

        return view('auth.login', $data);
    }

    public function authenticate(Request $request)
    {
        $rules = [
            'email' => ['required',],
            'password' => ['required'],
        ];

        $credentials =  $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Login Gagal!');
    }

    // public function form_registration()
    // {
    //     $data = array(
    //         'title' => 'Form Registrasi',
    //     );

    //     return view('auth.registration', $data);
    // }

    // public function registration(Request $request, M_auth $auth)
    // {
    //     $validate = Validator::make(
    //         $request->all(),
    //         [
    //             'username'    => 'unique:tbl_auth,username',
    //             'email'       => 'email:rfc,dns|unique:tbl_auth,email',
    //             'nim'         => 'unique:tbl_mahasiswa,nim',
    //             'password'    => 'min:6',
    //             'konfirmasi_password' => 'same:password'
    //         ],
    //         [
    //             'username.unique'   => ':attribute sudah terdaftar!',
    //             'email.unique'      => ':attribute sudah terdaftar!',
    //             'nim.unique'        => ':attribute sudah terdaftar!',
    //             'konfirmasi_password.same' => ':attribute tidak sama!',
    //         ]
    //     );

    //     if ($validate->passes()) {

    //         $data = array(
    //             'username' => $request->username,
    //             'password' => Hash::make($request->konfirmasi_password),
    //             'email'    => $request->email,
    //             'nim'      => $request->nim,
    //             'nama'     => $request->nama,
    //             'jenis_kelamin' => "Laki-laki",
    //         );

    //         $insert = $auth->registration($data);

    //         if (!$insert) {
    //             return to_route('login')->with('success', 'Registrasi Berhasil');
    //         } else {
    //             return to_route('login')->with('error', 'Registrasi Gagal');
    //         }
    //     }

    //     return back()->withErrors($validate->errors())->withInput();
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
