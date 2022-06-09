@extends('Template.utama')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-3">
                        <input type="month" class="form-control" id="inputTglpinjam">
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-center">
                                <th>No</th>
                                <th>Kode Alat</th>
                                <th>Jumlah Alat</th>
                                <th>Harga</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
