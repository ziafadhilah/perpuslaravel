@extends('layouts/main')
@section('title', 'Transaksi Peminjaman')
@section('container')
<div class="container mt-3">
    <div class="card-title">
        <h4>Form Transaksi </h4>
        <a href="{{url('/transaksi')}}" class="d-inline">Batal</a>
    </div>
    <div class="row mt-3">
        <form method="post" action="/create/transaksi">
        @csrf
            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Kode Transaksi</span>
                    <input id="kode_transaksi" type="text" class="form-control" name="kode_transaksi" value="{{ $kode }}" required readonly="">
                        @if ($errors->has('kode_transaksi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_transaksi') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Pinjam</span>
                    <input id="tgl_pinjam" type="date" class="form-control" name="tgl_pinjam" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}">
                                @if ($errors->has('tgl_pinjam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Kembali</span>
                    <input id="tgl_kembali" type="date"  class="form-control" name="tgl_kembali" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(5)->toDateString())) }}" required="">
                                @if ($errors->has('tgl_kembali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_kembali') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-group mb-3">
                    <select name="id_buku" class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Buku --</option>
                        @foreach($book as $books)
                        <option value="{{$books->id}}">{{$books->judul}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select name="id_anggota" class="form-select" aria-label="Default select example">
                        <option selected>-- Pilih Anggota --</option>
                        @foreach($anggotas as $anggota)
                        <option value="{{$anggota->id}}">{{$anggota->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Keterangan</span>
                    <input type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" id="ket" placeholder="Keterangan" value="{{old('ket')}}">
                    @error('ket')
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