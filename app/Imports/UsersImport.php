<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id'       => $row[8],
            'name'     => $row[1],
            'email'    => $row[5], 
            'password' => bcrypt($row[6]),
            'role'     => $row[7],
        ]);
    }
        public function startRow(): int
    {
        return 2; // Skip the header row
    }
}
