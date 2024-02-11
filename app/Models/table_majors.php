<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_majors extends Model
{
    use HasFactory;

    protected $fillable = [
        'major_id',
        'major_name',
    ];
}
