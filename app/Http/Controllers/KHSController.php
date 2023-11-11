<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\KHS;
use Illuminate\Http\Request;

class KHSController extends Controller
{
    // Fungsi untuk memeriksa apakah mata kuliah sudah dipilih di semester yang sama
    public function checkCourse(Request $request)
    {
        $semester = $request->input('semester');
        $course = $request->input('course');

        $existingCourse = KHS::where('semester', $semester)
            ->where('course', $course)
            ->exists();

        return response()->json(['exists' => $existingCourse]);
    }

    // Fungsi untuk menampilkan halaman entry KHS
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
            'courses' => 'required|array',
            'courses.*' => 'required',
            'grades' => 'required|array',
            'grades.*' => 'required',
            'sks' => 'required|array',
            'sks.*' => 'required|numeric',
        ]);

        $namaLengkap = auth()->user()->name;

        $userData = DB::table('users')
            ->join('mahasiswa', 'users.name', '=', 'mahasiswa.nama_lengkap')
            ->select('mahasiswa.nim')
            ->where('users.name', $namaLengkap)
            ->first();

        $nim = $userData ? $userData->nim : null;

        foreach ($data['courses'] as $key => $course) {
            $existingCourse = KHS::where('semester', $data['semester'])
                ->where('course', $course)
                ->exists();

            if ($existingCourse) {
                return redirect()->back()->with('error', 'This course is already chosen for this semester.');
            }

            KHS::create([
                'nim' => $nim,
                'semester' => $data['semester'],
                'course' => $course,
                'grade' => $data['grades'][$key],
                'sks' => $data['sks'][$key],
            ]);
        }

        return redirect()->back()->with('success', 'KHS data saved successfully!');
    }
}
