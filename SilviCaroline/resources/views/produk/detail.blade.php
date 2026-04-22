@extends('template')

@section('title', 'Ini Halaman Detail Produk')

@section('navbar')
    <b>Ini bisa diisi navbar</b>
    @endsection

    @section('content')
    <h2> Ini Halaman Detail Produk </h2>
        Nama Produk : <b>{{$product_name}}</b>
        Id : <b>{{ $id }}</b>
        <hr/>
        @for ($i = 0; $i < count($product); $i++)
            Data {{$i}} <br />
        @endfor
        
    @endsection

    
