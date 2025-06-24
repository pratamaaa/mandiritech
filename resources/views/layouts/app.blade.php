<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'MandiriTech CCTV' }}</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        const scrollContainer = document.getElementById('galleryScroll');
        document.getElementById('scrollLeft').addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });
        document.getElementById('scrollRight').addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
    </script>

    <script>
        const imageModal = document.getElementById('imageModal');
        imageModal.addEventListener('show.bs.modal', function(event) {
            const trigger = event.relatedTarget;
            const imgSrc = trigger.getAttribute('data-img');
            const imgTitle = trigger.getAttribute('data-title');
            const modalImage = imageModal.querySelector('#modalImage');
            const modalTitle = imageModal.querySelector('#imageModalLabel');

            modalImage.src = imgSrc;
            modalTitle.textContent = imgTitle;
        });
    </script>


</body>

</html>
