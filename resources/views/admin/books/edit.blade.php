@extends('layouts.adminlte')

@section('title', 'Edit Buku')

@section('page-title', 'Edit Buku')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" class="form-control" name="title" value="">
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" class="form-control" name="author" value="">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="quantity" value="">
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
