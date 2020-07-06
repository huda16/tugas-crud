@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/pertanyaan/{{$item->id}}" method="post">
            @csrf
            @method('put')

            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" value="{{$item->judul}}" name="judul" placeholder="Enter item's name">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" value="{{$item->isi}}" name="isi" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="created_at">Tanggal di Buat</label>
                    <input type="datetime-local" class="form-control" id="created_at" value="{{$item->created_at}}" name="created_at" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="updated_at">Tanggal di Perbaharui</label>
                    <input type="datetime-local" class="form-control" id="updated_at" value="{{$item->updated_at}}" name="updated_at" placeholder="Description">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection