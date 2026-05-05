@extends('app.master')

@section('title', 'Supplier Index')

@section('sidebar')
    @parent
    @section('submenu-supplier')
        <a href="/supplier/create" class="list-group-item list-group-item-action ps-4">Tambah Supplier</a>
        <a href="/supplier/search" class="list-group-item list-group-item-action ps-4">Cari Supplier</a>
    @endsection
@endsection

@section('content')
    <h1 class="h3 mb-3">Supplier Index</h1>
    <p class="text-muted">Halaman daftar supplier menggunakan Layout master.</p>

    <div class="card">
        <div class="card-body">
            Konten supplier bisa ditambahkan disini.
        </div>
    </div>
@endsection