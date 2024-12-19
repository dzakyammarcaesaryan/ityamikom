@extends('layouts.admin')

@section('content')
    <!-- Data Penerbitan -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Data Penerbitan</h5>
                <button class="btn btn-primary btn-sm">
                    <i class="fas fa-download me-1"></i> Export Data
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Penerbitan</th>
                                <th>Judul Buku</th>
                                <th>Penerbit</th>
                                <th>Tanggal Terbit</th>
                                <th>Jumlah Halaman</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#PUB001</td>
                                <td>Pengantar AI</td>
                                <td>Penerbit ABC</td>
                                <td>2024-01-10</td>
                                <td>250</td>
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
@endsection
