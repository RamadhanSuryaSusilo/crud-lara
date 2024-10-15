@extends('layout')

@section('konten')

<h4>Edit data siswa</h4>

<form action="{{ route('siswa.update', $surya->id) }}" method="post">
    @csrf
    <label>nis</label>
    <input type="text" name="nis" value="{{ $surya->nis }}" class="form-control mb-2">
    <label>nama</label>
    <input type="text" name="nama" value="{{ $surya->nama }}" class="form-control mb-2">
    <label>alamat</label>
    <input type="text" name="alamat" value="{{ $surya->alamat }}" class="form-control mb-2">
    <label>jenis_kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $surya->jenis_kelamin }}" class="form-control mb-2">
    <label>hobi</label>
    <input type="text" name="hobi" value="{{ $surya->hobi }}" class="form-control mb-2">
    <label>asal sekolah</label>
    <input type="text" name="asal_sekolah" value="{{ $surya->asal_sekolah }}" class="form-control mb-2">

    <button class="btn btn-sm btn-success" type="submit">ubah</button>
</form>
@endsection