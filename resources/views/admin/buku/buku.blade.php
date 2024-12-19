@extends('layouts.admin')

@section('content')
    <!-- Daftar Buku -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Daftar Buku</h5>
                <a href="{{ route('admin.buku.create') }}" class="btn btn-primary btn-sm mb-0">
                    <i class="fas fa-plus"></i> Tambah Buku
                </a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success text-white mx-4 mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive p-0">
                    <table class="table table-hover align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>ISBN</th>
                                <th>Penulis</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($buku) && $buku->count() > 0)
                                @foreach($buku as $b)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <img src="{{ asset('/buku/'.$b->gambar) ?? asset('images/default-book.png') }}"
                                                     class="avatar avatar-sm me-3 " height="80vh"
                                                     alt="{{ $b->judul }}">
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $b->judul }}</h6>
                                        </td>
                                        < td>
                                            <p class="text-sm font-weight-bold mb-0">{{ $b->isbn }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">{{ $b->penulis }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">Rp {{ number_format($b->harga, 0, ',', '.') }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">{{ $b->stok }}</p>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.buku.edit', $b->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.buku.destroy', $b->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data buku.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
