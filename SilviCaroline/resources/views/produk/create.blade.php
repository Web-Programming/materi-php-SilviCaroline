@extends('app.master')

@section('title', $title)

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <form action="{{ url('/produk/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ url('/produk') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection