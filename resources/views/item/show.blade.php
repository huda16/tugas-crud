@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
    <h3>Detail Item</h3>
    <p>Judul : {{ $item->judul}} </p>
    <p>Isi : {{ $item->isi}} </p>
    <p>Tanggal di Buat : {{ $item->created_at}} </p>
    <p>Tanggal di Perbaharui : {{ $item->updated_at}} </p>
</div>
@endsection