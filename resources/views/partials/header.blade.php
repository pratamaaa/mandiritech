<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>MandiriTech - CCTV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Tags -->
    <meta name="keywords" content="MandiriTech, CCTV, Keamanan, Kamera Pengawas">
    <meta name="description" content="Solusi terbaik untuk sistem CCTV & keamanan rumah maupun bisnis Anda.">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries CSS -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Bootstrap & Custom CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Optional: Add lightbox or animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 px-3 px-lg-5">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="img/logo2.png" alt="MandiriTech Logo" style="height: 80px; margin-right: 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbarCollapse">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/cctvBasic') }}" class="dropdown-item">CCTV Basic</a></li>
                        <li><a href="{{ url('/cctvAudio') }}" class="dropdown-item">CCTV + Audio</a></li>
                        <li><a href="{{ url('/cctvColourVu') }}" class="dropdown-item">CCTV ColourVu</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kontak') }}" class="nav-link">Kontak</a>
                </li>
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a href="tel:+628562242624" class="btn btn-success px-4 py-2 rounded-pill">
                        <i class="bi bi-telephone-outbound me-2"></i>Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
