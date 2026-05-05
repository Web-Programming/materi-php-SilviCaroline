<?php

use Illuminate\Support\Facades\Route;

//Route ke halaman utama
Route::get('/', function () {
    echo 'Hello, Nama saya Silvi Caroline';
});

//Route ke halaman alamat
Route::get('/alamat', function(){
    echo 'Jalan Rajawali No. 14 Palembang<br>';
    echo 'Rt. 01 Rw. 02<br>';
    echo 'Kota Palembang<br>';
    echo 'Provinsi Sumatera Selatan';
});

//Route dinamis dengan parameter id
Route::get('/user/{id}', function($id){
    echo 'User ID: ' .$id;
});

//Route dinamis dengan parameter nama
Route::get('/user2/{name}', function($name){
    echo 'User Name: ' .$name;
});

//Route dinamis dengan opsional parameter nama
Route::get('/user3/{name?}', function($name = 'Tamu'){
    echo 'User Name: ' .$name;
});

//Route dinamis dengan parameter nama dan id
Route::get('/user4/{id}/{name}', function($id, $name){
    echo 'User ID: ' .$id.'<br>';
    echo 'User Name: ' .$name;
});

//Simulasi method
Route::get('/simpan', function(){
    echo 'Data berhasil disimpan';
});

Route::get('/update/{id}', function($id){
    echo 'Data berhasil diperbarui dengan ID: ' .$id;
});

Route::get('/update2/{id}', function($id){
    echo 'Data berhasil diperbarui dengan ID: ' .$id;
});

Route::get('/hapus/{id}', function($id){
    echo 'Data berhasil dihapus dengan ID: ' .$id;
});

//View lain
Route::get('/test-method', function(){
    return view('test_method');
});

Route::get('/profile', function(){
    return view('profile');
});

//======================
// PRODUK
//======================

//Data dummy produk
$products = [
    ['id'=>1, 'name'=>'Laptop', 'price'=>10000000],
    ['id'=>2, 'name'=>'Mouse', 'price'=>200000],
    ['id'=>3, 'name'=>'Keyboard', 'price'=>500000],
    ['id'=>4, 'name'=>'Monitor', 'price'=>2000000],
];

//Index produk
Route::get('/produk', function() use ($products){
    return view('produk.index', [
        'title' => 'Produk',
        'products' => $products
    ]);
});

//Create
Route::get('/produk/create', function(){
    return view('produk.create', [
        'title' => 'Tambah Produk'
    ]);
});

//Search
Route::get('/produk/search', function(){
    return view('produk.search');
});

//Detail produk (DINAMIS)
Route::get('/produk/{id}', function($id) use ($products){
    $product = $products[$id - 1];

    return view('produk.detail', [
        'title' => 'Detail Produk',
        'product' => $product
    ]);
});

//======================
// DETAIL PRODUK LAMA (OPSIONAL - DIPERBAIKI)
//======================

Route::get('/detailproduk', function(){
    return view('produk.detail');
});

Route::get('/detailproduk/{name}', function($name){
    return view('produk.detail', [
        'product_name'=> $name,
        'id'=> 101,
        'color'=> 'Silver',
        'Stock'=> 12
    ]);
});

//PERBAIKAN TYPO + HAPUS ERROR $id
Route::get('/detailproduk2/{name}', function($name){
    return view('produk.detail', [
        'product_name'=> $name,
        'id'=> 102,
        'color'=> 'Silver',
        'Stock'=> 12
    ]);
});