<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->role == 'mahasiswa') {
                // Cek apakah kolom 'nama_ibu' kosong
                $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

                if (empty($mahasiswa->nama_ibu)) {
                    return redirect()->route('biodata')->with('success', 'Silahkan Lengkapi Data Anda!');
                }
            }

            // Setelah melakukan pengecekan, lanjutkan dengan rute sesuai peran
            if ($user->role == 'mahasiswa') {
                return redirect('admin/mahasiswa');
            } elseif ($user->role == 'dosenwali') {
                return redirect('admin/dosenwali');
            } elseif ($user->role == 'departemen') {
                return redirect('admin/departemen');
            } elseif ($user->role == 'operator') {
                return redirect('admin/operator');
            }
        } else {
            return redirect('login')->withErrors('Username dan Password yang dimasukan tidak sesuai')->withInput();
        }
    }

    public function biodata()
    {
        $user = Auth::user();
        $mahasiswa = Mahasiswa::where('nim', $user->nim)->first();

        if ($user->role == 'mahasiswa') {
            if (empty($mahasiswa->nama_ibu)) {
                return view('biodata', compact('mahasiswa'));
            }
        }

        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
