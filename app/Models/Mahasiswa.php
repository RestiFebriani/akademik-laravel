<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'email',
        'tanggal_lahir',
        'alamat'
    ];
}
