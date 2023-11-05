<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use App\User; // Sesuaikan dengan nama model User Anda

class Mahasiswa extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'mahasiswa'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'angkatan',
        'status',
        'dosen_wali',
        'email_pribadi',
        'alamat_asal',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'nama_ibu',
        'no_hp'
    ];

    // Hubungkan model Mahasiswa dengan model User
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id'); // Sesuaikan nama model User dan kunci asing
    // }

    // Metode tambahan yang diperlukan
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getAuthIdentifierName()
    {
        return 'email'; // Gunakan kolom email untuk otentikasi
    }

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }

    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'user_id');
    }

    public function isDataPribadiUpdated()
    {
        return !empty($this->nama_lengkap) &&
            !empty($this->tempat_lahir) &&
            !empty($this->tanggal_lahir) &&
            !empty($this->nik) &&
            !empty($this->nama_ibu) &&
            !empty($this->nomor_hp) &&
            !empty($this->email_pribadi) &&
            !empty($this->alamat_asal);
    }
}
