@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4">Tambah Produk Baru</h2>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ups!</strong> Ada kesalahan saat input:<br><br>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Merk</label>
                <input type="text" name="brand" class="form-control" value="{{ old('brand') }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga (Rp)</label>
                <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>

            <div class="mb-3">
                <label for="specs" class="form-label">Spesifikasi</label>
                <textarea name="specs" class="form-control" rows="5">{{ old('specs') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-success">Simpan Produk</button>
        </form>
    </div>
@endsection
