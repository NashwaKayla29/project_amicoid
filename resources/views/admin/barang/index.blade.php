<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AMICOID </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/favicon.png') }}">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span class="ml-1">Data table Barang</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="float-start">
                                <h4 class="card-title">Data barang</h4>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary">
                                    + Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama_barang</th>
                                        <th>Size</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @php $i=1; @endphp
                                    @foreach ($barang as $data)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data->nama_barang }}</td>
                                            <td>{{ $data->size }}</td>
                                            <td>
                                                <form action="{{ route('barang.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('barang.edit', $data->id) }}"
                                                        class="btn btn-sm btn-warning" style="margin-bottom: 2%;">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('barang.destroy', $data->id) }}"
                                                        class="btn btn-sm btn-danger" data-confirm-delete="true"
                                                        style="margin-bottom: 2%;">
                                                        Hapus
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
