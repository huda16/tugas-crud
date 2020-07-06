@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Membuat Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/pertanyaan" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi">
                </div>
                <div class="form-group">
                    <label for="created_at">Tanggal di Buat</label>
                    <input type="datetime-local" class="form-control" id="created_at" name="created_at">
                </div>
                <div class="form-group">
                    <label for="updated_at">Tanggal di Perbaharui</label>
                    <input type="datetime-local" class="form-control" id="updated_at" name="updated_at">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection