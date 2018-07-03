<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informatika extends Model
{
    protected $table = 'informatikas';
    protected $fillable = ['matakuliah', 'sks', 'semester'];
}
