@extends('layouts.app')

@section('title', 'halaman produk')

@section('content')

    <h1>ini adalah halaman produk</h1>
    <h1>selemat datang {{ $nama }}</h1>

    <div class="alert alert-{{ $alertType }}">
        {{ %alertMessage }}
    </div>

@endsection