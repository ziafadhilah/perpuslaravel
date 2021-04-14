@extends('layouts/main')
@section('title', 'Daftar Kategori')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="card-title mt-3">Daftar Kategori</h4>
            <a href="{{url('/create/kategori')}}" class="btn btn-outline-success">Tambah Kategori</a>
            @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group mt-3">
                @foreach ($kategoris as $kategori)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$kategori->nama}}
                    <a href="/kategori/{{$kategori->id}}" class="btn btn-outline-primary">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection