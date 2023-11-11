<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IRSController extends Controller
{

    public function create()
    {
        $uniqueSemesters = IRS::distinct('semester')->pluck('semester')->toArray();
        $namaLengkap = auth()->user()->name;

        $userData = DB::table('users')
            ->join('mahasiswa', 'users.name', '=', 'mahasiswa.nama_lengkap')
            ->select('mahasiswa.nim')
            ->where('users.name', $namaLengkap)
            ->first();

        $nim = $userData ? $userData->nim : null;

        return view('irs', ['nim' => $nim], compact('uniqueSemesters'));
    }

    public function store(Request $request)
    {

        $irsData = new IRS();
        $irsData->nim = $request->input('nim');
        $irsData->semester = $request->input('semester');
        $irsData->semester_aktif = $request->input('semester_aktif');
        $irsData->IP = $request->input('IP'); // Assuming 'IP' is the name of the field
        $irsData->SKS = $request->input('SKS'); // Assuming 'SKS' is the name of the field
        $irsData->save();
        // Validate the request data
        $request->validate([
            'nim' => 'required',
            'semester_aktif' => 'required',
            'semester' => 'required|in:' . implode(',', IRS::distinct('semester')->pluck('semester')->toArray()),
            'IP' => 'required',
            'SKS' => 'required',
        ]);

        // Create a new IRS instance using mass assignment
        IRS::create($request->all());

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
