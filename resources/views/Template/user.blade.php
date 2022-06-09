@extends('Template.utama')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="uploadproses.php">
                        Pilih  File : <Input type="file" name="csv">
                        <input type="submit" value="upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
