<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ControllerMahasiswa extends Controller
{
    public function create()
    {
        return view('index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'min:8', 'max:150'],
            'NIM' => 'required',
            'angkatan' => 'required',
            'status' => 'required',
            'dosen_wali' => 'nullable',
        ]);

        // Simpan data ke tabel users
        $user = new User();
        $user->name = $validatedData['nama_lengkap'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = 'mahasiswa';
        $user->save();

        // Simpan data ke tabel mahasiswa
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validatedData['NIM']; // Simpan NIM
        $mahasiswa->nama_lengkap = $validatedData['nama_lengkap']; // Simpan Nama Lengkap
        $mahasiswa->angkatan = $validatedData['angkatan'];
        $mahasiswa->status = $validatedData['status'];
        $mahasiswa->dosen_wali = $validatedData['dosen_wali'];
        $mahasiswa->save();

        // Arahkan pengguna ke halaman yang sesuai setelah registrasi
        return redirect('/dashboard'); // Ganti sesuai kebutuhan
    }

    public function showBiodataForm()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $mahasiswa = Mahasiswa::where('nama_lengkap', auth()->user()->nama_lengkap)->first();

        return view('biodata', compact('user', 'mahasiswa'));
    }
}
