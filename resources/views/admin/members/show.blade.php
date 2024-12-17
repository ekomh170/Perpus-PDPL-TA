@extends('layouts.adminlte')

@section('title', 'Detail Anggota')

@section('page-title', 'Detail Anggota')

@section('content')
<div class="card">
    <div class="card-body">
        <h4><strong>Nama:</strong> {{ $member->name ?? 'N/A' }}</h4>
        <p><strong>Email:</strong> {{ $member->email ?? 'N/A' }}</p>
        <p><strong>No Telepon:</strong> {{ $member->phone_number ?? 'N/A' }}</p>
        <p><strong>Alamat:</strong> {{ $member->address ?? 'N/A' }}</p>
        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
