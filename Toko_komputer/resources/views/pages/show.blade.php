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
            <div class="col-6">

                <h3 class="mt-3"><b>Detail Barang {{$barang->nama_barang}}</b></h3>
            </div>
        </div>

        <ul class="list-group">
            <li class="list-group-item active">{{$barang->no_invoice}}</li>
            <li class="list-group-item">{{$barang->nama_barang}}</li>
            <li class="list-group-item">{{$barang->jenis_barang}}</li>
            <li class="list-group-item">{{$barang->berat_barang}}</li>
            <li class="list-group-item">{{$barang->warna_barang}}</li>
        </ul>
        <br>
        <a href="{{ $barang->barang_id }}/edit" class="btn btn-info">Edit</a>
        <form action="{{ $barang->barang_id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/barang" class="btn btn-warning">Kembali</a>

  @endsection

