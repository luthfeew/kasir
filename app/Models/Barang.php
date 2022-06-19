<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'total_stok',
        'harga_beli',
        'harga_jual',
        'kategori_barang',
        'merk_barang',
        'satuan_barang',
        'keterangan',
    ];
}
