<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CameraController extends Controller
{
    // Menampilkan daftar kamera
    public function index()
    {$cameras = Camera::paginate(4); // Menampilkan 4 data per halaman
        return view('camera.index', compact('cameras'));
    }

    // Menampilkan form tambah kamera
    public function create()
    {
        return view('camera.create');
    }

    // Menyimpan data kamera ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'merek' => 'required|max:255',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        Camera::create($validated);
        return redirect()->route('cameras.index')->with('success', 'Kamera berhasil ditambahkan!');
    }

    // Menampilkan form edit kamera
    public function edit($id)
    {
        $camera = Camera::findOrFail($id); // Ambil data kamera berdasarkan ID
        return view('camera.edit', compact('camera')); // Kirimkan data kamera ke view edit
    }

    // Mengupdate data kamera
    public function update(Request $request, $id)
    {
        // Validasi data yang diinputkan
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'merek' => 'required|max:255',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $camera = Camera::findOrFail($id); // Cari kamera berdasarkan ID (pastikan ada)
        $camera->update($validated); // Update data kamera dengan data yang telah divalidasi

        return redirect()->route('cameras.index')->with('success', 'Data kamera berhasil diperbarui!'); // Redirect ke halaman index dengan pesan sukses
    }

    public function destroy($id): RedirectResponse
    {
        $camera = Camera::findOrFail($id);
        $camera->delete();

        return redirect()->route('cameras.index')->with('success', 'Data kamera berhasil dihapus!');
    }

    // ... (Fungsi lain tetap sama)
}