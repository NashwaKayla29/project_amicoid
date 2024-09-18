@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h5>hasil potong</h5>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('HasilPotong.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('HasilPotong.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                                <label class="form-label">Nama pemotong</label>
                                <select class="form-control" name="id_potong">
                                    @foreach ($potong as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_pemotong }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="mb-2">
                            <label class="form-label">Jumlah dihasilkan</label>
                            <input type="text" class="form-control @error('jumlah_dihasilkan') is-invalid @enderror" name="jumlah_dihasilkan"
                            required>
                            @error('jumlah_dihasilkan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Jumlah lolos</label>
                            <input type="text" class="form-control @error('jumlah_lolos') is-invalid @enderror" name="jumlah_lolos"
                            required>
                            @error('jumlah_lolos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Jumlah cacat</label>
                            <input type="text" class="form-control @error('jumlah_cacat') is-invalid @enderror" name="jumlah_cacat"
                            required>
                            @error('jumlah_cacat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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