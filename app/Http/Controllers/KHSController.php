<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\KHS;
use Illuminate\Http\Request;

class KHSController extends Controller
{ // Fungsi untuk menampilkan halaman entry KHS
    public function index()
    {
        $namaLengkap = auth()->user()->name;

        $userData = DB::table('users')
            ->join('mahasiswa', 'users.name', '=', 'mahasiswa.nama_lengkap')
            ->select('mahasiswa.nim')
            ->where('users.name', $namaLengkap)
            ->first();

        $nim = $userData ? $userData->nim : null;

        return view('khs', ['nim' => $nim]);
    }

    // Fungsi untuk menyimpan data KHS
    public function store(Request $request)
    {
        $data = $request->validate([
            'semester' => 'required',
            'ip' => 'required|numeric|min:0|max:4',
            'ipk' => 'required|numeric|min:0|max:4',
            'sks' => 'required|numeric',
            'sksk' => 'required|numeric',
            'pdf_file' => 'required|mimes:pdf|max:2048', // max:2048 menunjukkan ukuran maksimum dalam kilobyte (2MB)
        ]);

        $namaLengkap = auth()->user()->name;

        $userData = DB::table('users')
            ->join('mahasiswa', 'users.name', '=', 'mahasiswa.nama_lengkap')
            ->select('mahasiswa.nim')
            ->where('users.name', $namaLengkap)
            ->first();

        $nim = $userData ? $userData->nim : null;

        // Simpan file PDF
        $pdfFileName = time() . '.' . $request->file('pdf_file')->extension();
        $request->file('pdf_file')->move(public_path('pdf_files'), $pdfFileName);

        KHS::create([
            'nim' => $nim,
            'semester' => $data['semester'],
            'ip' => $data['ip'],
            'ipk' => $data['ipk'],
            'sks' => $data['sks'],
            'sksk' => $data['sksk'],
            'pdf_file' => $pdfFileName,
        ]);

        return redirect()->back()->with('success', 'KHS data saved successfully!');
    }
}
