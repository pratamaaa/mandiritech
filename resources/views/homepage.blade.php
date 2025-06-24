@extends('layouts.app')
@section('content')
    <!-- Konten dari template index.html -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner1.png" alt="Image" class="img-fluid"
                        style="
                        width: 100%;
                        height: auto;
                        max-height: 70vh;
                        min-height: 300px;
                        object-fit: cover;
                    ">

                </div>
                {{-- <div class="carousel-item">
                    <img src="img/banner2.png" alt="Image" class="img-fluid"
                        style="
                        width: 100%;
                        height: auto;
                        max-height: 70vh;
                        min-height: 300px;
                        object-fit: cover;
                    ">
                </div> --}}
                <div class="carousel-item">
                    <img src="img/banner5.jpg" alt="Image" class="img-fluid"
                        style="
                        width: 100%;
                        height: auto;
                        max-height: 70vh;
                        min-height: 300px;
                        object-fit: cover;
                    ">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase fw-bold" style="letter-spacing: 4px;">Layanan Kami</h5>
            <h2 class="display-5 fw-semibold">Kategori Produk</h2>
        </div>

        <div class="row g-4">
            <!-- Kartu 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden hover-shadow wow fadeInUp"
                    data-wow-delay="0.2s">
                    <img src="{{ asset('img/basic.jpg') }}" class="card-img-top img-fluid" alt="Paket CCTV Basic">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-0 text-dark"><a href="{{ url('/cctvBasic') }}">Paket CCTV Basic</a></h5>
                    </div>
                </div>
            </div>

            <!-- Kartu 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden hover-shadow wow fadeInUp"
                    data-wow-delay="0.4s">
                    <img src="{{ asset('img/audio.jpg') }}" class="card-img-top img-fluid" alt="Paket CCTV + Audio">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-0 text-dark"><a href="{{ url('/cctvAudio') }}">Paket CCTV + Audio</a></h5>
                    </div>
                </div>
            </div>

            <!-- Kartu 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden hover-shadow wow fadeInUp"
                    data-wow-delay="0.6s">
                    <img src="{{ asset('img/colourvu.jpg') }}" class="card-img-top img-fluid" alt="Paket CCTV ColourVu">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-0 text-dark"><a href="{{ url('/cctvColourVu') }}">Paket CCTV ColourVu</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>
    @include('partials.gallery')
    @include('partials.peta')
@endsection
