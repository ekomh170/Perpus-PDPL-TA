@extends('layouts.adminlte')

@section('title', 'Manajemen Anggota')

@section('page-title', 'Daftar Anggota')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.members.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop Data Anggota Backend -->
                    @forelse($members as $member)
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                            <td>{{ $member->nama }}</td> <!-- Nama Anggota -->
                            <td>{{ $member->email }}</td> <!-- Email Anggota -->
                            <td>{{ $member->telepon }}</td> <!-- Nomor Telepon -->
                            <td>{{ $member->alamat }}</td> <!-- Alamat Anggota -->
                            <td>
                                @if ($member->status === 'active')
                                    <span class="badge badge-success">Aktif</span>
                                @else
                                    <span class="badge badge-secondary">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <!-- Tombol Detail -->
                                <a href="{{ route('admin.members.show', $member->id) }}" class="btn btn-info btn-sm"
                                    title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-warning btn-sm"
                                    title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus anggota ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <!-- Tombol Aktif/Nonaktif -->
                                <form action="{{ route('admin.members.toggle-status', $member->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    @if ($member->status === 'active')
                                        <button type="submit" class="btn btn-secondary btn-sm" title="Nonaktifkan"
                                            onclick="return confirm('Yakin ingin menonaktifkan anggota ini?')">
                                            <i class="fas fa-toggle-off"></i>
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-success btn-sm" title="Aktifkan"
                                            onclick="return confirm('Yakin ingin mengaktifkan anggota ini?')">
                                            <i class="fas fa-toggle-on"></i>
                                        </button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data anggota.</td>
                            <!-- Pesan jika data kosong -->
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
