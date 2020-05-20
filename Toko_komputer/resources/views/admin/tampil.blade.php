@extends('admin.layout.master')
@section('tittle', 'sidebar')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Toko Komputer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/toko">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">Data Barang Toko Komputer EduTech</h3>

                <a href="/barang/create" class="btn btn-primary my-3">Tambah Data Barang</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Invoice</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Berat Barang</th>
                    <th scope="col">Warna Barang</th>
                    <th scope="col">Image</th>

                </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($barang as $tampil)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><a href="/barang/{{ $tampil->barang_id}}">{{ $tampil->no_invoice}}</a></td>
                            <td>{{$tampil->nama_barang}}</td>
                            <td>{{$tampil->jenis_barang}}</td>
                            <td>{{$tampil->berat_barang}}</td>
                            <td>{{$tampil->warna_barang}}</td>
                            <td><img src="{{ Storage::url($tampil->gambar_barang) }}" alt="" style="width: 100px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
