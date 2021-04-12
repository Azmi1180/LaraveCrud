@extends('layouts.master')

@section('content')

@if(session('success'))
    <div class="alert alert-success  mt-2" role="alert">
    {{ session('success') }}
</div>    
@endif

<div class="row">
<form action="/siswa/{{$siswa->id}}/update" method="POST">
    <h1>Edit Data Siswa</h1>    
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
    </div>

    <select name="jenis_kelamin" class="form-select mb-3" aria-label="Default select example" value="{{ $siswa->jenis_kelamin }}">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
        <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
    </select>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Agama</label>
        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{ $siswa->agama }}">
    </div>

    <div class="form-floating mb-3">
        <textarea name="alamat" class="form-control" placeholder="Tuliskan Alamat Lengkap mu disini" id="floatingTextarea2" style="height: 100px">{{ $siswa->alamat }}</textarea>
        <label for="floatingTextarea2">Alamat</label>
    </div>
    <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
</form>
</div>

@endsection