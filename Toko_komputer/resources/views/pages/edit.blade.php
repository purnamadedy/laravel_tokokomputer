@extends('admin.layout.master')
@section('tittle', 'tambah')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Simple Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Edit Barang </h1>


                <form method="post" action="/barang/{{ $barang->barang_id }}">
                    @method('patch')
                    @csrf

                    <div class="form-group">
                    <label for="no invoice">No Invoice</label>
                    <input type="text" class="form-control @error('no_invoice') is-invalid @enderror" id="no_invoice" placeholder="Masukan No Invoice" name="no_invoice" value="{{ $barang->no_invoice }}">
                        @error('no_invoice')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="Masukan Nama Barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                        @error('nama_brang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" placeholder="Masukan Jenis Barang" name="jenis_barang" value="{{ $barang->jenis_barang }}">
                        @error('jenis_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="berat_barang">Berat Barang</label>
                        <input type="text" class="form-control @error('warna_barang') is-invalid @enderror" id="berat_barang" placeholder="Masukan Berat Barang" name="berat_barang" value="{{ $barang->berat_barang }}">
                        @error('warna_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="warna_barang">Warna Barang</label>
                        <input type="text" class="form-control @error('warna_barang') is-invalid @enderror" id="warna_barang" placeholder="Masukan Warna Barang" name="warna_barang" value="{{ $barang->warna_barang }}">
                        @error('warna_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar_barang">Gambar barang</label>
                        <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang">
                          @error('gambar_barang')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Ubah Data Barang</button>
                </form>
            </div>
        </div>
    </div>

  @endsection
