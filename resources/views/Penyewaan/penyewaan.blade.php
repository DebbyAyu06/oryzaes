@extends('Template.utama')
@section('content')
<div class="content">
    <h5 class="title">Penyewaan</h5>
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="" class="btn btn-success">Tambah Data<i class="fa fa-plus-square"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NOMOR HP</th>
                    <th>JAMINAN</th>
                    <th>EDIT</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="justify-content-center">
                        <span class="fa-stack" style="color : blue">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="fa-stack" style="color : red">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
