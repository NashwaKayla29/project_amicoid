@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h5>Potong</h5>
                        </div>
                        <div class="float-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('potong.update', $potong->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-2">
                                <label class="form-label">Nama pemotong</label>
                                <input type="text" class="form-control @error('nama_pemotong') is-invalid @enderror"
                                    name="nama_pemotong" value="{{ $potong->nama_pemotong }}" required>
                                @error('nama_pemotong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama bahan</label>
                                <input type="text" class="form-control @error('nama_bahan') is-invalid @enderror"
                                    name="nama_bahan" value="{{ $potong->nama_bahan = $request->nama_bahan}}" required>
                                @error('nama_bahan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Size</label>
                                <input type="text" class="form-control @error('size') is-invalid @enderror"
                                    name="size" value="{{ $potong->size }}" required>
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Tanggal potong</label>
                                <input type="date" class="form-control @error('tanggal_potong') is-invalid @enderror"
                                    name="tanggal_potong" value="{{ $potong->tanggal_potong }}" required>
                                @error('tanggal_potong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    name="nama_barang" value="{{ $potong->barang->nama_barang }}" required>
                                @error('nama_barang')
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
