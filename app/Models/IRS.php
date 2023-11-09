<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    protected $table = 'irs_data';
    protected $fillable = ['semester', 'IP', 'SKS'];
}
