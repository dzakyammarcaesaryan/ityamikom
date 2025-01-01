<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class AdminController extends Controller
{
    public function penjualan()
    {
        // Logika untuk mengambil data penjualan
        return view('admin.penjualan'); // Pastikan nama file tampilan sesuai
    }

    public function buku()
    {
        // Logika untuk mengambil data buku
        $buku = Buku::all(); // Contoh mengambil semua data buku
        return view('admin.buku', compact('buku')); // Pastikan nama file tampilan sesuai
    }


    public function penerbitan()
    {
        // Logika untuk mengambil data penerbitan
        return view('admin.penerbitan'); // Pastikan nama file tampilan sesuai
    }
}