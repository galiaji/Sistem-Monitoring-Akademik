<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    protected $table = 'khs_data'; // Specify the table name

    protected $fillable = [
        'nim',
        'semester',
        'course',
        'grade',
        'sks',
        // Other fields
    ];
}
