@extends('layouts/main')
@section('title', 'Edit Buku')
@section('container')
<div class="container mt-3">
    <div class="card-title">
        <h4>Form Tambah Data Buku </h4>
        <a href="{{url('/')}}" class="d-inline">Batal</a>
    </div>
    <div class="row mt-3">
        <form method="post" action="/create/buku">
        @csrf
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" placeholder="Masukan Judul Buku" value="{{old('judul')}}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <select name="id_kategori" class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Kategori --</option>
                        @foreach($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pengarang</span>
                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" id="pengarang" placeholder="Pengarang" value="{{old('pengarang')}}">
                    @error('pengarang')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Penerbit</span>
                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit" placeholder="Penerbit" value="{{old('penerbit')}}">
                    @error('penerbit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tahun Terbit</span>
                    <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun terbit" value="{{old('tahun_terbit')}}">
                    @error('tahun_terbit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Deskripsi</span>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="{{old('deskripsi')}}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Stok</span>
                    <input type="text" class="form-control @error('jumlah_buku') is-invalid @enderror" name="jumlah_buku" id="jumlah_buku" placeholder="Stok Buku" value="{{old('jumlah_buku')}}">
                    @error('jumlah_buku')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success">Tambah</button>
        </form>
    </div>
</div>
@endsection