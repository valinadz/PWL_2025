@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h1>Profil Pengguna 👤</h1>
    <p>ID: {{ $id }}</p>
    <p>Nama: {{ $name }}</p>
    <a href="/" class="btn">Kembali ke Home</a>
@endsection
