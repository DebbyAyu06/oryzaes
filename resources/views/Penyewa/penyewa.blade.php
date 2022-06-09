@extends('Template.utama')
@section('content')
<div class="content">
    <h5 class="title">Penyewa</h5>
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('tambahpenyewa') }}" class="btn btn-success">Tambah Data<i
                        class="fa fa-plus-square"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>ID PENYEWA</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NOMOR HP</th>
                    <th>JAMINAN</th>
                </tr>
                @foreach ($penyewa as $item)
                <tr>
                    <td>{{ $item['idpenyewa'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['nohp'] }}</td>
                    <td>{{ $item['jaminan'] }}</td>
                    <td class="text-center">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true" style="color: black"></i></a>
                        |
                        <a href="{{ url('editpenyewa', $item->idpenyewa) }}"><i class="fa fa-pencil-square-o"
                                aria-hidden="true"></i></a>
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