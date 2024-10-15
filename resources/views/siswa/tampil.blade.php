@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-sm btn-primary" href="{{ route('siswa.tambah') }}">Tambah siswa</a>
    </div>
</div>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>nama</th>
        <th>alamat</th>
        <th>jenis kelamin</th>
        <th>Hobi</th>
        <th>asal sekolah</th>
        <th>aksi</th>
    </tr>
    @foreach($surya as $no=>$data)
    <tr id="row-{{ $data->id }}">
        <td>{{$no+1}}</td>
        <td>{{$data->nis}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->hobi}}</td>
        <td>{{$data->asal_sekolah}}</td>
        <td>
            <a class="btn btn-sm btn-warning" href="{{ route('siswa.edit', $data->id) }}">edit</a>
            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $data->id }}">Hapus</button>

            <!-- <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">hapus</button>
            </form> -->
        </td>
    </tr>
    @endforeach
</table>

@endsection