<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    protected $table = 'khs_data'; // Ganti dengan nama tabel yang sesuai

    protected $fillable = [
        'nim',
        'semester',
        'ip',
        'ipk',
        'sks',
        'sksk',
        'pdf_file', // Tambahkan kolom file PDF
        // Tambahkan kolom lain yang sesuai
    ];

    // Tambahkan aturan validasi sesuai dengan perubahan formulir
    public static function rules()
    {
        return [
            'semester' => 'required',
            'ip' => 'required|numeric|min:0|max:4',
            'ipk' => 'required|numeric|min:0|max:4',
            'sks' => 'required|numeric',
            'sksk' => 'required|numeric',
            'pdf_file' => 'required|mimes:pdf|max:2048', // max:2048 menunjukkan ukuran maksimum dalam kilobyte (2MB)
        ];
    }
}
