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
                        <th>Role</th> <!-- Tambahkan kolom Role -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $member)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->telepon }}</td>
                            <td>{{ $member->alamat }}</td>
                            <td>
                                @if ($member->status === 'active')
                                    <span class="badge badge-success">Aktif</span>
                                @else
                                    <span class="badge badge-secondary">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <!-- Menampilkan role dari user terkait -->
                                {{ $member->user->role ?? 'Tidak Ada' }}
                            </td>
                            <td>
                                <a href="{{ route('admin.members.show', $member->id) }}" class="btn btn-info btn-sm"
                                    title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-warning btn-sm"
                                    title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus anggota ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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
                            <td colspan="8" class="text-center">Tidak ada data anggota.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
