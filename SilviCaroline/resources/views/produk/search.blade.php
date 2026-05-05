@extends('app.master')

@section('title', 'Cari Produk')

@section('content')
<h1>Cari Produk</h1>

<form action="/produk/search" method="GET">
    <input type="text" name="keyword" placeholder="Cari...">
    <button type="submit">Cari</button>
</form>
@endsection