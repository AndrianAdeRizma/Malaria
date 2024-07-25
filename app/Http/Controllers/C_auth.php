<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;

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

        $credentials =  $this->validate($request, $rules);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Login Gagal!');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->stateless()->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = M_auth::where('google_id', $userFromGoogle->getId())->first();

        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {

            DB::beginTransaction();

            try {
                $newUser = User::create([
                    'google_id' => $userFromGoogle->getId(),
                    'email' => $userFromGoogle->getEmail(),
                    'level' => 'Pasien',
                    'password' => null,
                ]);

                Pasien::create([
                    'auth_id' => $newUser->id_auth,
                    'nama'    => $userFromGoogle->getName(),
                    'created_at' => date('Y-m-d')
                ]);

                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
                dd($th);
                die;
                return redirect()->back()->with(['error' => 'Something Went Wrong!']);
            }

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect('/');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();

        return redirect('/');
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
