@extends('app.master')

@section('title', $title)

@section('sidebar')
    @parent
@endsection

@section('submenu-produk')
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($products); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $products[$i]['name'] }}</td>
                        <td>Rp {{ number_format($products[$i]['price'], 0, ',', '.') }}</td>
                    </tr>
                @endfor
            </tbody>
            
        </table>
    </div>
</div>
@endsection