@extends('layouts.admin')

@section('content')
    <!-- Data Penjualan -->
<div class="container-fluid">


    <!-- Tombol Tambah Buku -->
    {{-- <div class="row">
        <div class="col-12"> --}}
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
                                            <td>
                                                <p class="text-xs text-secondary mb-0">{{ $b->isbn }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $b->penulis }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0">Rp {{ number_format($b->harga, 0, ',', '.') }}</p>
                                            </td>
                                            <td class="text-xs text-secondary mb-0">
                                                <span class="badge badge-sm text-dark
                                                    {{ $b->stok > 10 ? 'bg-gradient-success' :
                                                       ($b->stok > 0 ? 'bg-gradient-warning' : 'bg-gradient-danger') }}">
                                                    {{ $b->stok }} Stok
                                                </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.buku.edit', $b->id_buku) }}"
                                                       class="btn btn-link text-warning px-2 mb-0"
                                                       data-toggle="tooltip"
                                                       title="Edit Buku">
                                                        <i class="fas fa-edit text-warning"></i>
                                                    </a>
                                                    <form action="{{ route('admin.buku.destroy', $b->id_buku) }}"
                                                          method="POST"
                                                          class="d-inline"
                                                          onsubmit="return confirm('Yakin hapus buku?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="btn btn-link text-danger px-2 mb-0"
                                                                data-toggle="tooltip"
                                                                title="Hapus Buku">
                                                            <i class="fas fa-trash text-danger"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-4">
                                            Tidak ada data buku
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {{-- </div>
    </div> --}}

    <!-- Data Penerbitan -->

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
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3"></textarea>
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
