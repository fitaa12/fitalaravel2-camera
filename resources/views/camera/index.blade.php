<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kamera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Kamera</h2>
        <a href="{{ route('cameras.create') }}" class="btn btn-primary">+ Tambah Kamera</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cameras->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover shadow-sm bg-white">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Kamera</th>
                        <th>Merek</th>
                        <th>Harga Sewa (Rp)</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cameras as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->merek }}</td>
                            <td>{{ number_format($item->harga_sewa, 0, ',', '.') }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ route('cameras.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('cameras.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-4">
            {{ $cameras->links() }}
        </div>
        </div>
    @else
        <p class="text-muted">Belum ada kamera yang tersedia.</p>
    @endif
</div>

</body>
</html>
