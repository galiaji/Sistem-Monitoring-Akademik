<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MahasiswaImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nim'           => $row[0],
            'nama_lengkap'  => $row[1], 
            'angkatan'      => $row[2],
            'status'        => $row[3],
            'dosen_wali'    => $row[4],
        ]);
    }
        public function startRow(): int
    {
        return 2; // Skip the header row
    }
}
