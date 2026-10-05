<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyas extends Model
{
    use HasFactory;

    protected $table = 'karyas';

    protected $fillable = [
        'namakarya',
        'jurusan',
        'deskripsikarya',
        'gambarkarya',
    ];
}