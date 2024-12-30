@extends('layouts.adminlte')

@section('title', 'Manajemen Anggota')

@section('page-title', 'Daftar Anggota')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary float-right">Tambah Anggota</a>
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
                        <!-- Looping Data Buku -->
                        <tr>
                            <td>{{ $loop->iteration }}</td> <!-- Nomor Urut -->
                            <td>{{ $member->nama }}</td> <!-- Nama Anggota -->
                            <td>{{ $member->email }}</td> <!-- Email Anggota -->
                            <td>{{ $member->telepon }}</td> <!-- Nomor Telepon -->
                            <td>{{ $member->alamat }}</td> <!-- Alamat Anggota -->
                            <td>{{ $member->status }}</td> <!-- Status -->
                            <td>
                                <a href="{{ route('admin.members.show', $member->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <!-- Tombol Detail -->
                                <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <!-- Tombol Edit -->
                                <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                                    <!-- Tombol Hapus -->
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data member.</td> <!-- Pesan jika data kosong -->
                        </tr>
                    @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
