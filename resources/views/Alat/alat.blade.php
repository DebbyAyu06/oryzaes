@extends('Template.utama')
@section('content')
<div class="content">
    <h5 class="title">Alat</h5>
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('tambahalat') }}" class="btn btn-success">Tambah Data<i
                        class="fa fa-plus-square"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>GAMBAR</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <!-- <th>AKSI</th> -->
                </tr>
                @foreach ($alat as $itemAlt)
                <tr>
                    <td>{{ $itemAlt['kd_alat'] }}</td>
                    <td>{{ $itemAlt['nm_alat'] }}</td>
                    <td><img width="150px" src="{{ $itemAlt['gambar'] }}"></td>
                    <td>{{ $itemAlt['harga'] }}</td>
                    <td>{{ $itemAlt['stok'] }}</td>
                    <td class="text-center">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true" style="color: black"></i></a>
                        |
                        <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        |
                        <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection