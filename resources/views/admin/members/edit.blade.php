@extends('layouts.adminlte')

@section('title', 'Edit Anggota')

@section('page-title', 'Edit Anggota')

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Menampilkan error validasi di atas form --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Input Nama --}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $member->nama) }}"
                        placeholder="Masukkan nama anggota" required>
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Email --}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $member->email) }}"
                        placeholder="Masukkan email anggota" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Telepon --}}
                <div class="form-group">
                    <label for="telepon">No Telepon</label>
                    <input type="text" name="telepon" id="telepon"
                        class="form-control @error('telepon') is-invalid @enderror"
                        value="{{ old('telepon', $member->telepon) }}" placeholder="Masukkan nomor telepon" required>
                    @error('telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan alamat anggota" required>{{ old('alamat', $member->alamat) }}</textarea>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Input Status --}}
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                        required>
                        <option value="active" {{ old('status', $member->status) == 'active' ? 'selected' : '' }}>Aktif
                        </option>
                        <option value="inactive" {{ old('status', $member->status) == 'inactive' ? 'selected' : '' }}>Tidak
                            Aktif</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Tombol Submit dan Kembali --}}
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
