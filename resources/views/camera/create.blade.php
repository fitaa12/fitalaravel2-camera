<!DOCTYPE html>
<html>
<head>
    <title>Insert Kamera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Insert Kamera</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('cameras.store') }}" method="POST" class="mb-5">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nama Kamera</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                @error('nama')<div class="text-danger">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">Merek</label>
                <input type="text" name="merek" class="form-control" value="{{ old('merek') }}">
                @error('merek')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Harga Sewa (Rp)</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                @error('harga_sewa')<div class="text-danger">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-6">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="2">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    {{--  --}}

</body>
</html>