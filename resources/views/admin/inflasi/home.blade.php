@extends('admin.layout.core')
@section('content')
    <div class="container">
        <h1 class="h1">Data Presentase Penjualan</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah Presentase Penjualan</th>
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
                        <td>{{ $item->presentase_penjualan }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
