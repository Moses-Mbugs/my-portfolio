<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles1')
</head>
<body class="font-mono bg-gray-50 text-gray-900">
    <header class="py-4 fixed top-0 left-0 w-full bg-white bg-opacity-90 shadow-md z-50">
        <nav class="flex justify-center space-x-6">
            <a href="#intro" class="text-sm hover:text-green-500 transition duration-300">*.Intro</a>
            <a href="#expertise" class="text-sm hover:text-green-500 transition duration-300M">*.Expertise</a>
            <a href="#projects" class="text-sm hover:text-green-500 transition duration-300">*.My Projects</a>
            <a href="#professional-work" class="text-sm hover:text-green-500 transition duration-300">*.Professional Work</a>
            <a href="#contact" class="text-sm hover:text-green-500 transition duration-300">*.Contact</a>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>
    <footer class="py-4 bg-gray-800 text-center text-green">
        © 2k25 Moses Mbugua Muigai
    </footer>
</body>
</html>
