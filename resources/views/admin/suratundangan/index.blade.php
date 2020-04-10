@extends('layouts.app')
@section('title', 'Surat Kegiatan')
@section('content')

<a href="{{ route('create') }}" class="btn btn-primary">Tambah Surat</a>
<br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penerima</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $val)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $val->nama_penerima }}</td>
            <td>
                {{-- generate --}}
                <a href="{{ route('generate',$val->id) }}" class="btn btn-warning">Generate</a>
                {{-- end generate    --}}
                {{-- edit --}}
                <a href="{{ route('edit',$val->id) }}" class="btn btn-success">Edit</a>
                {{-- end edit --}}
                {{-- delete --}}
                
                <a class="btn btn-danger" data-toggle="modal" href='#modal-id'>Delete</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-title">Delete Data</h4>

                                Apakah Anda Yakin Ingin Menghapus {{ $val->nama_penerima }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <form action="{{route('delete',$val->id)}}" method="POST" role="form">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- end delete --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection