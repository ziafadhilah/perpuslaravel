@extends('layouts/main')
@section('title', 'Daftar Buku')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="card-title mt-3">Data Buku</h4>
            <a href="{{url('/create/buku')}}" class="btn btn-outline-success">Tambah Buku</a>
            @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group mt-3">
                @foreach ($bukus as $buku)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$buku->judul}}
                    <a href="/buku/{{$buku->id}}" class="btn btn-outline-primary">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection