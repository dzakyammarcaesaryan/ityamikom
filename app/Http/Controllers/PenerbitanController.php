<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerbitanController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'tanggal_masuk' => 'required|date',
        'target_terbit' => 'required|date',
        'status' => 'required',
        'file' => 'required|mimes:pdf|max:2048' // Validasi PDF max 2MB
    ]);
Penerbitan::create([
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'tanggal_masuk' => $request->tanggal_masuk,
        'target_terbit' => $request->target_terbit,
        'status' => $request->status,
        'file_path' => $filePath,
    ]);
    // Simpan file ke storage
    $filePath = $request->file('file')->store('uploads', 'public');



    return redirect()->route('penerbitan.index')->with('success', 'Penerbitan berhasil ditambahkan!');
}

}