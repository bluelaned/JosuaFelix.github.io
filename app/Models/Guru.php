<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'kdguru',
        'nama',
        'tmp_lahir',
        'tal_lahir',
        'alamat',
        'nohp',
        'email',
    ];

    protected $table = 'guru';
}
