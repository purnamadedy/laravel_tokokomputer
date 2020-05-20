<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('admin.tampil', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'no_invoice' => 'required|size:10',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'berat_barang' => 'required',
            'warna_barang' => 'required'

        ]);

        Barang::create($request->all());
        return redirect('/barang')->with('status', 'Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('admin.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('admin.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        Barang::where('barang_id', $barang->barang_id)
            ->update([

                'no_invoice' => $request->no_invoice,
                'nama_barang' => $request->nama_barang,
                'jenis_barang' => $request->jenis_barang,
                'berat_barang' => $request->berat_barang,
                'warna_barang' => $request->warna_barang

            ]);
        return redirect('/barang')->with('status', 'Data Barang Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->barang_id);
        return redirect('/barang')->with('status', 'Data Karyawan Berhasil Di Hapus');
    }
}
