@extends('Template.utama')
@section('content')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Tambah Data Alat</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('simpanalat') }}" method="post">
                {{ csrf_field() }}
                <!-- <div class="form-group">
                    <input type="text" id="name" name="kd_alat" class="form-control" placeholder="Kode Alat">
                </div> -->
                <div class="form-group">
                    <input type="text" id="number" name="nm_alat" class="form-control" placeholder="Nama Alat">
                </div>
                <div class="form-group">
                    <input type="price" id="name" name="harga" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                    <input type="number" id="number" name="stok" class="form-control" placeholder="Stok">
                </div>
                <div class="mb-3">
                    <!-- <label for="formFileMultiple" class="form-label">Gambar Alat</label> -->
                    <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection