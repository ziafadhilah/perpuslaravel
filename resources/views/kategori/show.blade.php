@extends('layouts/main')
@section('title', 'Detail Kategori')
@section('container')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Buku Kategori : {{$kategori->nama}}</h4>
            @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Nama Buku
                            </th>
                            <th>
                                Pengarang
                            </th>
                            <th>
                                Penerbit
                            </th>
                            <th>
                                Tahun Terbit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($buku as $bukus)
                        <tr>
                            <td>{{$bukus->id}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection