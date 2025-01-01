@extends('layouts.adminlte')

@section('title', 'Peminjaman Buku')

@section('page-title', 'Daftar Peminjaman Buku')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.borrowings.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Tambah Peminjaman
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Denda</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($borrowings as $borrowing)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                            <td>{{ $borrowing->member->nama }}</td> <!-- Nama Anggota -->
                            <td>{{ $borrowing->book->judul }}</td> <!-- Judul Buku -->
                            <td>{{ \Carbon\Carbon::parse($borrowing->tanggal_peminjaman)->format('d M Y') }}</td>
                            <!-- Format Tanggal -->
                            <td>
                                @if ($borrowing->tanggal_pengembalian)
                                    {{ \Carbon\Carbon::parse($borrowing->tanggal_pengembalian)->format('d M Y') }}
                                @else
                                    <span class="text-danger">Belum Dikembalikan</span>
                                @endif
                            </td>
                            <td>
                                @if ($borrowing->status === 'peminjaman')
                                    <span class="badge badge-warning">Dipinjam</span>
                                @elseif ($borrowing->status === 'pengembalian')
                                    <span class="badge badge-success">Dikembalikan</span>
                                @endif
                            </td>
                            <td>Rp {{ number_format($borrowing->denda, 0, ',', '.') }}</td> <!-- Format Denda -->
                            <td>
                                <a href="{{ route('admin.borrowings.show', $borrowing->id) }}" class="btn btn-info btn-sm"
                                    title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.borrowings.edit', $borrowing->id) }}"
                                    class="btn btn-warning btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.borrowings.destroy', $borrowing->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus peminjaman ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                                <!-- Tombol Konfirmasi Pengembalian -->
                                @if ($borrowing->status === 'peminjaman')
                                    <button type="button" class="btn btn-success btn-sm" title="Konfirmasi Pengembalian"
                                        data-toggle="modal" data-target="#returnModal{{ $borrowing->id }}">
                                        <i class="fas fa-check-circle"></i> Dikembalikan
                                    </button>
                                @endif
                            </td>
                        </tr>

                        <!-- Modal Konfirmasi Pengembalian -->
                        <div class="modal fade" id="returnModal{{ $borrowing->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="returnModalLabel{{ $borrowing->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="returnModalLabel{{ $borrowing->id }}">
                                            Konfirmasi Pengembalian
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.borrowings.return', $borrowing->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin buku "<strong>{{ $borrowing->book->judul }}</strong>"
                                                telah dikembalikan?</p>
                                            <div class="form-group">
                                                <label for="denda">Jumlah Denda (Opsional)</label>
                                                <input type="number" name="denda" id="denda" step="0.01"
                                                    min="0" class="form-control"
                                                    placeholder="Masukkan jumlah denda jika ada">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Konfirmasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data peminjaman buku.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
