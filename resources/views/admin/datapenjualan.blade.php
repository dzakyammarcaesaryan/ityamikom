@extends('layouts.admin')

@section('content')
    <!-- Data Penjualan -->
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Penjualan</h5>
            <button class="btn btn-primary btn-sm">
                <i class="fas fa-download me-1"></i> Export Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Tanggal</th>
                            <th>Nama Pembeli</th>
                            <th>Judul Buku</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD001</td>
                            <td>2024-01-15</td>
                            <td>John Doe</td>
                            <td>Pengantar AI</td>
                            <td>2</td>
                            <td>Rp 500.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Data Buku -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Buku</h5>
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tambahBukuModal">
                <i class="fas fa-plus me-1"></i> Tambah Buku
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>978-602-1234</td>
                            <td>Machine Learning Dasar</td>
                            <td>Dr. Jane Smith</td>
                            <td>Teknologi</td>
                            <td>50</td>
                            <td>Rp 250.000</td>
                            <td><span class="badge bg-success">Tersedia</span></td>
                            <td>
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Data Penerbitan -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Penerbitan</h5>
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tambahPenerbitanModal">
                <i class="fas fa-plus me-1"></i> Tambah Penerbitan
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID Penerbitan</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Tanggal Masuk</th>
                            <th>Target Terbit</th>
                            <th>Status</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PUB001</td>
                            <td>Data Science untuk Pemula</td>
                            <td>Prof. Robert Johnson</td>
                            <td>2024-01-01</td>
                            <td>2024-03-01</td>
                            <td><span class="badge bg-warning">Proses</span></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 70%">70%</div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="tambahBukuModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Buku Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select">
                            <option>Teknologi</option>
                            <option>Sains</option>
                            <option>Bisnis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Penerbitan -->
<div class="modal fade" id="tambahPenerbitanModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penerbitan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Target Terbit</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option>Persiapan</option>
                            <option>Proses</option>
                            <option>Revisi</option>
                            <option>Cetak</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Script untuk menangani aksi pada tabel
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk menangani klik pada tombol aksi
        function handleActionClick(event) {
            const action = event.target.closest('button');
            if (!action) return;

            const row = action.closest('tr');
            const id = row.cells[0].textContent;

            if (action.classList.contains('btn-info')) {
                alert('Lihat detail untuk ID: ' + id);
            } else if (action.classList.contains('btn-warning')) {
                alert('Edit data untuk ID: ' + id);
            } else if (action.classList.contains('btn-danger')) {
                if (confirm('Apakah Anda yakin ingin menghapus data dengan ID: ' + id + '?')) {
                    alert('Data dengan ID: ' + id + ' telah dihapus');
                    // Di sini Anda bisa menambahkan logika untuk menghapus baris dari tabel
                }
            }
        }

        // Menambahkan event listener untuk setiap tabel
        document.querySelectorAll('.table').forEach(table => {
            table.addEventListener('click', handleActionClick);
        });

        // Fungsi untuk menangani submit form (bisa ditambahkan nanti)
        function handleFormSubmit(event) {
            event.preventDefault();
            // Logika untuk menyimpan data form
            alert('Data berhasil disimpan');
            // Tutup modal setelah menyimpan
            const modal = event.target.closest('.modal');
            const bsModal = bootstrap.Modal.getInstance(modal);
            bsModal.hide();
        }

        // Menambahkan event listener untuk form di dalam modal
        document.querySelectorAll('.modal form').forEach(form => {
            form.addEventListener('submit', handleFormSubmit);
        });
    });
</script>
@endsection

