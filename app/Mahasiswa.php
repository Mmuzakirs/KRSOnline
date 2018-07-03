<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['namaMhs', 'namaJur', 'namaFak', 'angkatan'];
}
