@extends('layouts.app')

@section('content')
    <div class="text-center mx-auto mt-5 mb-4" style="max-width: 600px;">
        <h1 class="display-5 fw-bold">Paket CCTV Colour Vu</h1>
    </div>

    <div class="container py-5">
        <!-- Tabs Merk -->
        <ul class="nav nav-pills justify-content-center mb-4" id="merk-tab" role="tablist">
            @foreach ($brands as $index => $brand)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" data-bs-toggle="pill"
                        data-bs-target="#{{ strtolower($brand) }}" type="button">
                        {{ $brand }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            @foreach ($brands as $index => $brand)
                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ strtolower($brand) }}">
                    <div class="row g-4">
                        @forelse ($productsByBrand[$brand] as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 product-card border-0 shadow-sm">
                                    <h3 class="mb-1 fw-bold text-light text-center py-2 px-3 rounded soft-bg">
                                        {{ $product->detail_kamera }}
                                    </h3>

                                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                        style="height: 350px; object-fit: cover;" alt="{{ $product->merk }}">

                                    <div class="card-body">
                                        <h5 class="mb-1 fw-bold text-dark text-center">{{ $product->paket }}</h5>
                                        <span class="fw-bold text-primary">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </span>
                                        <div class="mb-2">
                                            <strong>Spesifikasi:</strong>
                                            <ul class="mb-0">
                                                @foreach (preg_split("/\r\n|\r|\n/", $product->spek) as $line)
                                                    @if (trim($line) !== '')
                                                        <li>{{ ltrim($line, ' ') }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                                        <p class="card-text">{{ Str::limit($product->detail, 500) }}</p>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum ada produk {{ $brand }}</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
