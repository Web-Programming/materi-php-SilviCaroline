@section('sidebar')
    @parent
@section('submenu-produk')
@endsection
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <p>Nama Produk: {{ $product['name'] }}</p>
    <p>ID Produk: {{ $product['id'] }}</p>
    <p>Price: Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
    <hr>
    <a href="{{ url('/produk') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection