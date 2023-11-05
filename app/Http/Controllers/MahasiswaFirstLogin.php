<?php

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;

class MahasiswaFirstLogin extends Controller
{
    public function firstLogin()
    {
        return view("mahasiswa.first_login");
    }

    public function updateDataPribadi(Request $request)
    {
        // Validasi data pribadi
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nik' => 'required',
            'nama_ibu' => 'required',
            'nomor_hp' => 'required|numeric',
            'email_pribadi' => 'required|email',
            'alamat_asal' => 'required',
        ]);

        // Simpan data pribadi ke model Mahasiswa
        $mahasiswa = auth()->user()->mahasiswa;
        $mahasiswa->update($validatedData);

        // Tandai bahwa data pribadi telah diisi
        $mahasiswa->data_pribadi_updated = true;
        $mahasiswa->save();

        // Arahkan pengguna ke halaman "dashboard"
        return redirect("/dashboard");
    }
}