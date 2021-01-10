@extends('layouts/main')
@section('title', 'Daftar Anggota')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="card-title mt-3">Data Anggota</h4>
            <a href="{{url('/create/anggota')}}" class="btn btn-outline-success">Tambah Anggota</a>
            @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group mt-3">
                @foreach ($anggotas as $anggota)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$anggota->nama}}
                    <a href="/anggota/{{$anggota->id}}" class="btn btn-outline-primary">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection