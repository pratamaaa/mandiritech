<!-- Section Galeri Carousel -->
<section class="gallery py-5 bg-light">
    <div class="container">

        <!-- Judul -->
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase fw-bold" style="letter-spacing: 4px;">Galeri</h5>
            <h2 class="display-5 fw-semibold">Dokumentasi Pemasangan</h2>
        </div>

        <!-- Carousel -->
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($galleries->chunk(4) as $chunkIndex => $galleryChunk)
                    <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                        <div class="row g-3 justify-content-center">
                            @foreach ($galleryChunk as $gallery)
                                <div class="col-md-3">
                                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                                        <div class="position-relative">
                                            <span class="position-absolute top-0 start-0 m-2 badge bg-primary">
                                                {{ $gallery->category }}
                                            </span>

                                            {{-- Trigger Modal --}}
                                            <a href="#" class="thumbnail-click" data-bs-toggle="modal"
                                                data-bs-target="#imageModal"
                                                data-img="{{ asset('storage/' . $gallery->image) }}"
                                                data-title="{{ $gallery->title }}">
                                                <img src="{{ asset('storage/' . $gallery->thumbnail) }}"
                                                    alt="{{ $gallery->title }}" class="img-fluid w-100"
                                                    style="height: 200px; object-fit: cover; cursor: pointer;">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="fw-bold text-dark">{{ $gallery->title }}</h6>
                                            <p class="mb-1 text-muted">
                                                <i class="fas fa-map-marker-alt me-1"></i>{{ $gallery->location }}
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-camera me-1"></i>{{ $gallery->camera_type }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Tombol Navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>

        <!-- Modal Gambar -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="imageModalLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" alt="Preview" class="img-fluid rounded shadow">
                        <div class="mt-3">
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
