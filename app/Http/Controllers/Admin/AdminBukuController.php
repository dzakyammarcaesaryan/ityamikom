<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminBukuController extends Controller
{
    // Metode untuk menambah buku
    public function storeBuku(Request $request)
    {
        $validatedData = $request->validate([
            'isbn' => 'required|unique:buku,isbn',
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0'
        ]);

        try {
            $buku = Buku::create($validatedData);

            return redirect()->back()->with('success', 'Buku berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan buku: ' . $e->getMessage());
        }
    }

    // Metode untuk update buku
    public function updateBuku(Request $request, $id)
    {
        $validatedData = $request->validate([
            'isbn' => 'required|unique:buku,isbn,' . $id . ',id_buku',
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0'
        ]);

        try {
            $buku = Buku::findOrFail($id);
            $buku->update($validatedData);

            return redirect()->back()->with('success', 'Buku berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal update buku: ' . $e->getMessage());
        }
    }

    // Metode untuk menghapus buku
    public function destroyBuku($id)
    {
        try {
            $buku = Buku::findOrFail($id);
            $buku->delete();

            return redirect()->back()->with('success', 'Buku berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus buku: ' . $e->getMessage());
        }
    }
}
