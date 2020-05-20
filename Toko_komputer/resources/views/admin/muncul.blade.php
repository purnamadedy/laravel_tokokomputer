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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <th scope="col">Nama Toko</th>
                    <th scope="col">Pemilik Toko</th>
                    <th scope="col">No SIUP Toko</th>
                    <th scope="col">Alamat Toko</th>
                </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($namatoko as $tampil)
                        <tr>
                            <td>{{$tampil->id}}</td>
                            <td>{{ $tampil->nama_toko}}</td>
                            <td>{{$tampil->pemilik_toko}}</td>
                            <td>{{$tampil->no_siup}}</td>
                            <td>{{$tampil->alamat_toko}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
