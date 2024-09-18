@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h5>Bahan</h5>
                        </div>
                        <div class="float-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bahan.update', $bahan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-2">
                                <label class="form-label">Nama bahan</label>
                                <input type="text" class="form-control @error('nama_bahan') is-invalid @enderror"
                                    name="nama_bahan" value="{{ $bahan->nama_bahan }}" required>
                                @error('nama_bahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Ukuran bahan</label>
                                <input type="text" class="form-control @error('ukuran_bahan') is-invalid @enderror"
                                    name="ukuran_bahan" value="{{ $bahan->ukuran_bahan }}" required>
                                @error('ukuran_bahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Tanggal_masuk</label>
                                <input type="text" class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                    name="tanggal_masuk" value="{{ $bahan->tanggal_masuk }}" required>
                                @error('tanggal_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
