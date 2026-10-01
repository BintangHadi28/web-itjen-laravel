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
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }
    </script>

    @stack('scripts')

</body>
</html>