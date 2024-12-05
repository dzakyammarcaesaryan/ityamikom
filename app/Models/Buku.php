<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Nama tabel
    protected $table = 'buku';

    // Primary key
    protected $primaryKey = 'id_buku';

    // Kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'harga',
        'isbn',
        'penulis',
        'stok'
    ];

    // Cast tipe data
    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer'
    ];

    // Relasi dengan Pesanan
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_buku', 'id_buku');
    }

    // Scope untuk mencari buku berdasarkan ISBN
    public function scopeByIsbn($query, $isbn)
    {
        return $query->where('isbn', $isbn);
    }

    // Mutator untuk mengupdate stok
    public function kurangiStok($jumlah)
    {
        $this->stok -= $jumlah;
        $this->save();
    }

    // Accessor untuk format harga
    public function getFormattedHargaAttribute()
    {
        return 'Rp ' . number_format($this->harga, 2, ',', '.');
    }
}
