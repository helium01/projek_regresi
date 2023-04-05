@extends('admin.layout.core')
@section('content')
    <div class="container">
        <h1 class="h1">Data Minat Masyarakat</h1>
        <a class="btn btn-primary" href="/penjualan/create" role="button">Tambah Data Penjualan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Minat Masyarakat</th>
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
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->minat_masyarakat }}</td>
                        <td>
                            <a class="btn btn-primary" href="/penjualan/edit/{{ $item->id }}" role="button">Edit</a> |
                            <a class="btn btn-primary" href="/penjualan/delete/{{ $item->id }}" role="button">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
