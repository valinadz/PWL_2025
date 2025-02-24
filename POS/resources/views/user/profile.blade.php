@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h2>Profil Pengguna</h2>
    <p><strong>ID:</strong> {{ $id }}</p>
    <p><strong>Nama:</strong> {{ $name }}</p>
    <a href="/" class="btn btn-secondary">Kembali ke Home</a>
@endsection
