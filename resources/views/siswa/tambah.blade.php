@extends('layout')

@section('konten')

<h4>Tambah siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>nis</label>
    <input type="text" name="nis" class="form-control mb-2">
    <label>nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>jenis_kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label>hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">
    <label>asal sekolah</label>
    <input type="text" name="asal_sekolah" class="form-control mb-2">

    <button class="btn btn-sm btn-success" type="submit">Tambah siswa</button>
</form>
@endsection