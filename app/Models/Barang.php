<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'buku';
    protected $fillable = [
        'id_buku',
        'judul_buku',
        'penulis',
        'penerbit'
    ];
}
