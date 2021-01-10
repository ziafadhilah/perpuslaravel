<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('/transaksi/index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getRow = Transaksi::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();

        $kode = "T00001";
        
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "T0000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "T000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "T00".''.($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                    $kode = "T0".''.($lastId->id + 1);
            } else {
                    $kode = "T".''.($lastId->id + 1);
            }
        }
        $book = Buku::all();
        $bukus = Buku::where('jumlah_buku', '>', 0)->get();
        $anggotas = Anggota::get();
        return view('/transaksi/create', compact('bukus', 'kode', 'book', 'anggotas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_transaksi' => 'required|string|max:255',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
        ]);

        $transaksi = Transaksi::create($request->all());

        // $transaksi->buku->where('id', $transaksi->id_buku)
        //                 ->update([
        //                     'jumlah_buku' => ($transaksi->buku->jumlah_buku - 1),
        //                     ]);

        return redirect('/transaksi')->with('status', 'Data telah di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('/transaksi/show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('/transaksi/edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);

        $transaksi->update([
                'status' => 'kembali'
                ]);

        // $transaksi->buku->where('id', $transaksi->buku->id)
        //                 ->update([
        //                     'jumlah_buku' => ($transaksi->buku->jumlah_buku + 1),
        //                     ]);
        return redirect('/transaksi')->with('status', 'Data telah kembali!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);
        return redirect('/transaksi')->with('status', 'Data telah terhapus!');
    }
}
