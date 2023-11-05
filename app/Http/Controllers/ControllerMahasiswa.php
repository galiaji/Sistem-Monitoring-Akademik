<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
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
            'email' => 'required|email:dns|unique:mahasiswa',
            'email_verified_at' => 'nullable',
            'password' => ['required', 'min:8', 'max:150'],
            'NIK' => 'required|min:16',
        ]);

        // Simpan data ke tabel mahasiswa
        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nama_lengkap = $validatedData['nama_lengkap'];
        // $mahasiswa->email = $validatedData['email'];
        // $mahasiswa->password = bcrypt($validatedData['password']);
        // $mahasiswa->NIK = $validatedData['NIK'];
        // $mahasiswa->no_hp = $validatedData['no_hp'];

        // $mahasiswa->save();

        $validatedData['password'] = Hash::make($validatedData['password']);

        Mahasiswa::create($validatedData);

        // Arahkan pengguna ke halaman yang sesuai setelah registrasi
        return redirect('/dashboard'); // Ganti sesuai kebutuhan
    }
}
