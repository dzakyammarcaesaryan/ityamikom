@extends('layouts.admin')

@section('content')
    <!-- Data Penjualan -->
<div class="container-fluid">


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
