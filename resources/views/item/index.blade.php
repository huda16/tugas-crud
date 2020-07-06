@extends("adminlte.master")

@section('content')
<div class="mt-3 ml-3">
    <h1>Data items</h1>
    <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New Item</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>isi</th>
                <th style="width: 40px">Tanggal di Buat</th>
                <th style="width: 40px">Tanggal di Perbaharui</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">show</a>
                    <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-default">edit</a>
                    <form action="/pertanyaan/{{$item->id}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection