@extends('admin.layout.core')
@section('content')
    <div class="container">
        <h1 class="h1">Tambah Data</h1>
        <form action="/penjualan/store" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kendaraan</label>
                <input type="text" name="nama_kendaraan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">tahun</label>
                <input type="number" name="tahun" class="form-control" min="1900" max="2099" step="1"
                    placeholder="Masukkan tahun" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Minat Masyarakat</label></label>
                <input type="number" name="minat_masyarakat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Data Penjualan</label>
                <input type="number" name="data_penjualan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Presentase Penjualan </label>
                <input type="number" name="presentase_penjualan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trands</label>
                <input type="number" name="trand" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
