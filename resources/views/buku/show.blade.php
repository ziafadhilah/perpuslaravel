@extends('layouts/main')
@section('title', 'Detail Buku')
@section('container')
<div class="container mt-3">
    <div class="card" style="width: 25rem;">
        <div class="card-title">
            <div class="container mt-3">
                <h4>Detail Buku</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">Judul Buku : {{$buku->judul}}</p>
            <p class="card-text">Pengarang : {{$buku->pengarang}}</p>
            <p class="card-text">Penerbit : {{$buku->penerbit}}</p>
            <p class="card-text">Kategori : {{$buku->deskripsi}}</p>
            <p class="card-text">Tahun Terbit : {{$buku->tahun_terbit}}</p>
        </div>
        <div class="card-body">
            <a href="{{$buku->id}}/edit" class="btn btn-outline-success">Edit</a>
            <form action="{{$buku->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Anda yakin mau menghapus?')">Delete</button>
            </form>
            <a href="{{url('/')}}" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection