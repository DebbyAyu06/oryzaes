@extends('Template.utama')
@section('content')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Ubah Data Penyewa</h3>
        </div>
        <div class="card-body">
            <form action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" id="name" name="nama" class="form-control" placeholder="Nama Penyewa" n serv
                        value="{{ $pen->nama }}">
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
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
