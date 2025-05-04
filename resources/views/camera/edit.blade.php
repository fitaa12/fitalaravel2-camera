@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Kamera</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('cameras.update', $camera->id) }}" method="POST" class="mb-5">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama Kamera</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $camera->nama) }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="merek" class="form-label">Merek</label>
                <input type="text" name="merek" id="merek" class="form-control @error('merek') is-invalid @enderror" value="{{ old('merek', $camera->merek) }}">
                @error('merek')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="harga_sewa" class="form-label">Harga Sewa (Rp)</label>
                <input type="number" name="harga_sewa" id="harga_sewa" class="form-control @error('harga_sewa') is-invalid @enderror" value="{{ old('harga_sewa', $camera->harga_sewa) }}">
                @error('harga_sewa')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="2">{{ old('deskripsi', $camera->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('cameras.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection