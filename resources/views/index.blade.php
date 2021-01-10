@extends('layouts/main')
@section('title', 'Home')
@section('container')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title">Data Buku</h4>
            <a href="#" class="btn btn-outline-success">Tambah Buku</a>
        </div>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-stripped" id="table">
                    <thead>
                        <tr>
                            <th width="20">No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Jumlah Tersedia</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection