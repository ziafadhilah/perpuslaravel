@extends('layouts/main')
@section('title', 'Edit Anggota')
@section('container')
<div class="container mt-3">
    <div class="card-title">
        <h4>Form Edit Anggota </h4>
        <a href="{{url('/')}}" class="d-inline">Batal</a>
    </div>
    <div class="row mt-3">
        <form method="post" action="/anggota/{{$anggota->id}}">
        @method('patch')
        @csrf
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Anggota" value="{{$anggota->nama}}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat" value="{{$anggota->alamat}}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Jenis Kelamin</span>
                    <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="{{$anggota->jenis_kelamin}}">
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tempat Lahir</span>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="{{$anggota->tempat_lahir}}">
                    @error('tempat_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir</span>
                    <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="{{$anggota->tgl_lahir}}">
                    @error('tgl_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success">Ubah</button>
        </form>
    </div>
</div>
@endsection