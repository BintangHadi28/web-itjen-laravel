<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Inspektorat Jenderal')</title>
    <meta name="description" content="@yield('description', 'Website Resmi Inspektorat Jenderal')">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>

<body>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- KONTEN HALAMAN --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('partials.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
        // ===== AOS ANIMATION =====
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // ===== MENU MOBILE =====
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

        // ===== HERO SLIDER =====
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let slideInterval;
        const AUTO_DELAY = 4000;

        function showSlide(index) {
            if (slides.length === 0) return;
            slides.forEach(s => s.classList.remove('active'));
            dots.forEach(d => d.classList.remove('active'));
            slides[index].classList.add('active');
            if (dots[index]) dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            if (slides.length === 0) return;
            let next = (currentSlide + 1) % totalSlides;
            showSlide(next);
            resetInterval();
        }

        function prevSlide() {
            if (slides.length === 0) return;
            let prev = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(prev);
            resetInterval();
        }

        function goToSlide(index) {
            showSlide(index);
            resetInterval();
        }

        function startInterval() {
            if (slides.length === 0) return;
            slideInterval = setInterval(nextSlide, AUTO_DELAY);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        // Jalankan slider kalau ada
        if (slides.length > 0) {
            startInterval();

            const sliderWrapper = document.querySelector('.slider-wrapper');
            if (sliderWrapper) {
                sliderWrapper.addEventListener('mouseenter', () => clearInterval(slideInterval));
                sliderWrapper.addEventListener('mouseleave', startInterval);
            }

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });
        }
    </script>
    @stack('scripts')

</body>
</html>