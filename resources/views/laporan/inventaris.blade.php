@extends('layouts.report',['title'=>'Laporan Inventaris'])
@section('content')
<div class="container">
    <h3 class="text-center">Laporan Inventaris</h3>
    <div class="row">
        Kode Ruang : {{ $ruang->kode_ruang }} <br>
        Kode Ruang : {{ $ruang->nama_ruang }} <br>
        Jumlah Inventaris : {{ $inventaris->sum('jumlah') }}

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Inventaris</th>
                    <th>Nama Inventaris</th>
                    <th>Jenis</th>
                    <th>Kondisi</th>
                    <th>Jumlah</th>
                    <th>Tanggal Register</th>
                    <th>Petugas Register</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                ?>
                @foreach ($inventaris as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->kode_inventaris }}</td>
                        <td>{{ $row->nama_inventaris }}</td>
                        <td>{{ $row->nama_jenis }}</td>
                        <td>{{ $row->kondisi }}</td>
                        <td>{{ $row->jumlah }}</td>
                        <td>{{ $row->tanggal_register }}</td>
                        <td>{{ $row->nama_petugas }}</td>
                        <td>{{ $row->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection