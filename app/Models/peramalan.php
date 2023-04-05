<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peramalan extends Model
{
    use HasFactory;
    protected $fillable=[
            'nama_kendaraan',
            'tahun',
            'minat_masyarakat',
            'data_penjualan',
            'presentase_penjualan',
            'trand'
    ];
}
