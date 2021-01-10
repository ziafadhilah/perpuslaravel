@extends('layouts/main')
@section('title', 'Detail Anggota')
@section('container')
<div class="container mt-3">
    <div class="card" style="width: 25rem;">
        <div class="card-title">
            <div class="container mt-3">
                <h4>Detail Anggota</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">Nama : {{$anggota->nama}}</p>
            <p class="card-text">Alamat : {{$anggota->alamat}}</p>
            <p class="card-text">Jenis Kelamin : {{$anggota->jenis_kelamin}}</p>
            <p class="card-text">Tempat Lahir : {{$anggota->tempat_lahir}}</p>
            <p class="card-text">Tanggal Lahir : {{$anggota->tgl_lahir}}</p>
        </div>
        <div class="card-body">
            <a href="{{$anggota->id}}/edit" class="btn btn-outline-success">Edit</a>
            <form action="{{$anggota->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Anda yakin mau menghapus?')">Delete</button>
            </form>
            <a href="{{url('/')}}" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection