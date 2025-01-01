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

<!-- Modal Tambah Buku -->

@endsection

@section('scripts')
<script>
    // Tooltip aktivasi
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endsection
