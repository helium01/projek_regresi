<?php

namespace App\Http\Controllers;

use App\Models\peramalan;
use Illuminate\Http\Request;
use Phpml\Dataset\ArrayDataset;

class ProsesController extends Controller
{
    public function regresi()
    {
        $data = peramalan::all();
        $dataset = new ArrayDataset($data, ['trand', 'presentasi_penjualan', 'data_penjualan', 'minat_masyarakat', 'tahun', 'nama_kendaraan']);
    }
    //
}
