@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h5>Hasil Potong</h5>
                        </div>
                        <div class="float-end">
                            <a href="" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('HasilPotong.update', $hasil_potong->id) }}" method="POST"
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
                                <label class="form-label">Jumlah dihasilkan</label>
                                <input type="text" class="form-control @error('jumlah_dihasilkan') is-invalid @enderror"
                                    name="jumlah_dihasilkan" value="{{ $hasil_potong->jumlah_dihasilkan }}" required>
                                @error('jumlah_dihasilkan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Jumlah lolos</label>
                                <input type="text" class="form-control @error('jumlah_lolos') is-invalid @enderror"
                                    name="jumlah_lolos" value="{{ $hasil_potong->jumlah_lolos }}" required>
                                @error('tanggal_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Jumlah cacat</label>
                                <input type="text" class="form-control @error('jumlah_cacat') is-invalid @enderror"
                                    name="jumlah_cacat" value="{{ $hasil_potong->jumlah_cacat }}" required>
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
