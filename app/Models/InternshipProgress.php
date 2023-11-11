<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipProgress extends Model
{
    use HasFactory;

    protected $fillable = ['semester', 'status', 'seminar_date', 'grade', 'pdf_path'];
}
