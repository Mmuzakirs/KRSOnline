<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen2 extends Model
{
    protected $table = 'dosen2s';
    protected $fillable = ['namaDsn', 'namaJur', 'namaFak'];
}
