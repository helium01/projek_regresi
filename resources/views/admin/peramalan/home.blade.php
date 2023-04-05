@extends('admin.layout.core')
@section('content')
    <h1 class="h1">Data Penjualan</h1>
    <a class="btn btn-primary" href="#" role="button">Tambah Data Penjualan</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kendaraan</th>
                <th scope="col">Jumlah Penjualan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $no += 1 }}</th>
                    <td>{{ $item->nama_kendaraan }}</td>
                    <td>{{ $item->data_penjualan }}</td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button">Edit</a> |
                        <a class="btn btn-primary" href="#" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
