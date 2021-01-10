@extends('layouts/main')
@section('title', 'Daftar Transaksi')
@section('container')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Transaksi</h4>
            <a href="{{url('/create/transaksi')}}" class="btn btn-outline-success">Pinjam Buku</a>
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
                                Kode
                            </th>
                            <th>
                                Buku
                            </th>
                            <th>
                                Peminjam
                            </th>
                            <th>
                                Tgl Pinjam
                            </th>
                            <th>
                                Tgl Kembali
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <th>
                            {{$transaksi->kode_transaksi}}
                        </th>
                        <th>
                            {{$transaksi->id_buku}}
                        </th>
                        <th>
                            {{$transaksi->id_anggota}}
                        </th>
                        <th>
                            {{date('d/m/y', strtotime($transaksi->tgl_pinjam))}}
                        </th>
                        <th>
                            {{date('d/m/y', strtotime($transaksi->tgl_kembali))}}
                        </th>
                        <th>
                            @if($transaksi->status == 'pinjam')
                            <h6>Pinjam</h6>
                            @else
                            <h6>Kembali</h6>
                            @endif
                        </th>
                        <th>
                        @if($transaksi->status == 'pinjam')
                        <form action="/transaksi/{{$transaksi->id}}" method="post">
                        @method('put')
                        @csrf
                            <button type="submit" class="btn btn-outline-success" onclick="return confirm('Anda yakin data ini sudah kembali?')">Kembali</button>
                        </form>
                        @endif
                        </th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection