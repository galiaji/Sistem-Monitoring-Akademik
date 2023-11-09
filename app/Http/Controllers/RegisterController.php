<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;
use App\Imports\UsersImport;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class RegisterController extends Controller
{
    public function create()
    {
        return view('index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|min:3|max:14|unique:mahasiswa',
            'nama_lengkap' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:mahasiswa',
            'email_verified_at' => 'nullable',
            'password' => ['required', 'min:8', 'max:150'],
            'NIM' => 'required',
            'no_hp' => 'nullable',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Mahasiswa::create($validatedData);

        return redirect('/dashboard')->with('success', 'Registration Successful, Please Login!');
    }
    
    public function importFormMahasiswa()
    {
        return view('importMahasiswa');
    }

    public function importMahasiswa(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        Excel::import(new UsersImport, request()->file('file'));
        Excel::import(new MahasiswaImport, request()->file('file'));

        return redirect('importFormMahasiswa')->with('success', 'Data imported successfully.');
    }
}