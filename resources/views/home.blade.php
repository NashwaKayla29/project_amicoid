<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AMICOID </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/images/favicon.png')}}">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">  
</head>
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard</p>
                </div>
            </div>
        </div>

        <!-- Menampilkan data dalam tabel secara terpisah -->
        <div class="row">
            <!-- Tabel Bahan -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tabel Bahan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama bahan</th>
                                    <th>Ukuran bahan</th>
                                    <th>Tanggal masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($bahan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_bahan }}</td>
                                        <td>{{ $data->ukuran_bahan }}</td>
                                        <td>{{ $data->tanggal_masuk }}</td>
                                    </tr>
                                @endforeach

                                <!-- Tambahkan data bahan lainnya jika ada -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabel Barang -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tabel Barang</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama_barang</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($barang as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->size }}</td>
                                    </tr>
                                @endforeach
                                <!-- Tambahkan data barang lainnya jika ada -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabel Potong -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tabel Potong</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama pemotong</th>
                                    <th>Nama bahan</th>
                                    <th>Size</th>
                                    <th>Tanggal potong</th>
                                    <th>Nama barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($potong as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_pemotong }}</td>
                                        <td>{{ $data->bahan->nama_bahan }}</td>
                                        <td>{{ $data->size }}</td>
                                        <td>{{ $data->tanggal_potong }}</td>
                                        <td>{{ $data->barang->nama_barang }}</td>
                                    </tr>
                                @endforeach
                                <!-- Tambahkan data potong lainnya jika ada -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabel Hasil Potong -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tabel Hasil Potong</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama pemotong</th>
                                    <th>Jumlah dihasilkan</th>
                                    <th>Jumlah lolos</th>
                                    <th>Jumlah cacat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($hasil_potong as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->potong->nama_pemotong }}</td>
                                        <td>{{ $data->jumlah_dihasilkan }}</td>
                                        <td>{{ $data->jumlah_lolos }}</td>
                                        <td>{{ $data->jumlah_cacat }}</td>
                                    </tr>
                                @endforeach
                                <!-- Tambahkan data hasil potong lainnya jika ada -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
