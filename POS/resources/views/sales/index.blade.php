@extends('layouts.app')

@section('title', 'POS Transaction')

@section('content')
    <h1>POS Transaction 💰</h1>
    <p>Silakan lakukan transaksi penjualan di bawah ini:</p>

    <form action="#" method="POST">
        <label>Nama Produk:</label><br>
        <input type="text" name="product" placeholder="Masukkan nama produk" required><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="quantity" placeholder="Jumlah" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="price" placeholder="Harga per unit" required><br><br>

        <button type="submit" class="btn">Proses Transaksi</button>
    </form>

    <a href="/" class="btn">Kembali ke Home</a>
@endsection
