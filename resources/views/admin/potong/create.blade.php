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
                            <a href="{{ route('potong.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('potong.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Nama pemotong</label>
                                <input type="text" class="form-control @error('nama_pemotong') is-invalid @enderror"
                                    name="nama_pemotong" required>
                                @error('nama_pemotong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-sm-2 col-form-form-label" for="basic-icon-default-fullname">Nama
                                    bahan</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <select class="form-control" name="id_bahan">
                                            @foreach ($bahan as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_bahan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Size</label>
                                <input type="text" class="form-control @error('size') is-invalid @enderror"
                                    name="size" required>
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Tanggal_potong</label>
                                <input type="date" class="form-control @error('tanggal_potong') is-invalid @enderror"
                                    name="tanggal_potong" required>
                                @error('tanggal_potong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama barang</label>
                                <select class="form-control" name="id_barang">
                                    @foreach ($barang as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="mb-2">
                            <label class="form-label">Select Role</label>
                            <select class="form-control" name="isAdmin" id="isAdmin" required>
                                <option value="0" {{old('isAdmin')==0 ? 'selected' : ''}}>User</option>
                                <option value="1" {{old('isAdmin')==1 ? 'selected' : ''}}>Admin</option>
                            </select>
                        </div> --}}
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
