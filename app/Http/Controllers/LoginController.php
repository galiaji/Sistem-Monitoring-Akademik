<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function dashboard()
    {
        if (Session::has('email')) {
            return view('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function autentikasi(Request $request)
    {
        $nim = $request->input('nim');
        $password = $request->input('password');
    
        // Cari pengguna berdasarkan nim
        $user = User::where('nim', $nim)->first();
    
        if ($user) {
            // Username ditemukan
            if (Hash::check($password, $user->password)) {
                // Password cocok
                // Cari mahasiswa dengan nim yang sesuai
                $mahasiswa = Mahasiswa::where('nim', $nim)->first();
    
                if ($mahasiswa) {
                    // Mahasiswa ditemukan
                    if (empty($mahasiswa->nama_ibu)) {
                        // Jika kolom nama_ibu kosong, arahkan pengguna ke biodata.blade.php
                        return redirect()->route('biodata')->with('success', 'Silahkan Lengkapi Data Anda!');
                    } else {
                        // Set session untuk pengguna
                        Session::put('nim', $user->nim);
                        Session::put('email', $user->email);
                        Session::put('nama', $user->name);
                        Session::put('level', $user->role);
    
                        if ($user->role == 'mahasiswa') {
                            // Pengguna dengan peran mahasiswa
                            return redirect()->route('admin.mahasiswa')->with('success', 'Selamat Datang, ' . $user->name . ' (Mahasiswa) !!!');
                        } elseif ($user->role == 'dosenwali') {
                            // Pengguna dengan peran dosenwali
                            return redirect()->route('admin.dosenwali')->with('success', 'Selamat Datang, ' . $user->name . ' (Dosen Wali) !!!');
                        } elseif ($user->role == 'departemen') {
                            // Pengguna dengan peran departemen
                            return redirect()->route('admin.departemen')->with('success', 'Selamat Datang, ' . $user->name . ' (Departemen) !!!');
                        } elseif ($user->role == 'operator') {
                            // Pengguna dengan peran operator
                            return redirect()->route('admin.operator')->with('success', 'Selamat Datang, ' . $user->name . ' (Operator) !!!');
                        }
                    }
                } else {
                    // Mahasiswa tidak ditemukan
                    return redirect()->back()->with('error', 'Data mahasiswa tidak ditemukan.');
                }
            } else {
                // Password salah
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            // Nim tidak ditemukan
            return redirect()->back()->with('error', 'NIM tidak ditemukan.');
        }
    }
}