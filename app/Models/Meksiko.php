<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Umur',
        'Alamat',
        'Nomor'
    ];
}
