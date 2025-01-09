<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moses Mbugua</title>
    <!-- Fonts and Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles1')
</head>
<body class="font-inter bg-gradient-to-b from-gray-950 via-gray-50 to-gray-100 text-gray-900 antialiased">

    <!-- Header -->
    <header class="py-6 fixed top-0 left-0 w-full bg-white bg-opacity-90 shadow-lg z-50">
        <nav class="flex justify-center space-x-6 text-sm font-medium">
            <a href="#intro" class="hover:text-green-500 transition duration-300">*.Intro</a>
            <a href="#expertise" class="hover:text-green-500 transition duration-300">*.Expertise</a>
            <a href="#projects" class="hover:text-green-500 transition duration-300">*.My Projects</a>
            <a href="#professional-work" class="hover:text-green-500 transition duration-300">*.Professional Work</a>
            <a href="#contact" class="hover:text-green-500 transition duration-300">*.Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-center text-gray-400">
        <div class="flex justify-center space-x-4 mb-4">
            {{--  social icons  --}}
            {{--  <a href="https://github.com/your-github" target="_blank" class="text-gray-400 hover:text-white transition">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com/in/your-linkedin" target="_blank" class="text-gray-400 hover:text-blue-300 transition">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://instagram.com/your-instagram" target="_blank" class="text-gray-400 hover:text-pink-400 transition">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://facebook.com/your-facebook" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                <i class="fab fa-facebook"></i>
            </a>  --}}
        </div>
        <p class="text-sm">©2025 Moses Mbugua Muigai. All Rights Reserved.</p>
    </footer>

    <!-- Back-to-Top Button -->
    <button id="backToTop" class="hidden fixed bottom-8 right-8 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Smooth Scrolling Script -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Back-to-Top Button Logic
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
