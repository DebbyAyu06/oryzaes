@extends('Template.utama')
@section('content')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Tambah Data Penyewa</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('simpan') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" id="name" name="nama" class="form-control" placeholder="Nama Penyewa">
                </div>
                <div class="form-group">
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Penyewa"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" id="number" name="nohp" class="form-control" placeholder="Nomor Handphone">
                </div>
                <div class="form-group">
                    <input type="text" id="name" name="jaminan" class="form-control" placeholder="Jaminan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection