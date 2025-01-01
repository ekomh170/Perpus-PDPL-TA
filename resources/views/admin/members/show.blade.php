@extends('layouts.adminlte')

@section('title', 'Detail Anggota')

@section('page-title', 'Detail Anggota')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 class="text-center"><strong>Detail Anggota</strong></h3>
                        </div>
                        <div class="card-body">
                            <h4><strong>Nama:</strong> {{ $members->nama }}</h4>
                            <p><strong>Email:</strong> {{ $members->email }}</p>
                            <p><strong>No Telepon:</strong> {{ $members->telepon }}</p>
                            <p><strong>Alamat:</strong> {{ $members->alamat }}</p>
                            <p><strong>Status:</strong> {{ $members->status }}</p>
                            <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
