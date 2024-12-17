@extends('layouts.adminlte')

@section('title', 'Edit Anggota')

@section('page-title', 'Edit Anggota')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone_number">No Telepon</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $member->phone_number }}" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" required>{{ $member->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
@extends('layouts.adminlte')

@section('title', 'Edit Anggota')

@section('page-title', 'Edit Anggota')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone_number">No Telepon</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $member->phone_number }}" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" required>{{ $member->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
