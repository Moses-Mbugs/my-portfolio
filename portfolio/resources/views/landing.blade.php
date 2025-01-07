
@extends('layouts.app')
@section('styles1')
<style>
/* Slideshow Styles */
    .slideshow {
    position: relative;
    width: 100%; /* Adjust as needed */
    height: 400px; /* Ensure this matches your design */
    overflow: hidden;
}

.slideshow img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slideshow img:first-child {
    opacity: 1;
}

</style>
@endsection

@section('content')
    {{-- Intro Section --}}
    <section id="intro" class="min-h-screen flex items-center justify-center bg-white">
        <div class="flex items-center space-x-8">
            <img src="{{ asset('images/avatar.jpg') }}" alt="Avatar" class="w-32 h-32 rounded-full shadow-lg">
            <div>
                <h1 class="text-4xl font-bold">Hello there, I’m Moses Mbugua</h1>
                <p class="mt-2">A passionate developer and artist with a love for building beautiful solutions.</p>
                <a href="/path-to-cv.pdf" download class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
                    Download My CV
                </a>
            </div>
        </div>
        <!-- Scroll Button -->
        <a href="#expertise" class="absolute bottom-6 animate-bounce">
            <button class="w-10 h-10 bg-green-900 rounded-full flex items-center justify-center shadow-lg text-white">
                ↓
            </button>
        </a>
    </section>

    {{-- Expertise Section --}}
    <section id="expertise" class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-6">
        <h2 class="text-4xl font-bold mb-12">My Expertise</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl">
            <!-- Front-End Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Front-End Development</h3>
                <p class="text-gray-700">I specialize in crafting responsive, user-friendly interfaces using modern technologies like React, and Tailwind CSS.</p>
            </div>
            <!-- Back-End Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Back-End Development</h3>
                <p class="text-gray-700">I build robust server-side solutions with frameworks like Node.js, and Laravel, ensuring high performance and scalability.</p>
            </div>
            <!-- Mobile App Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Mobile App Development</h3>
                <p class="text-gray-700">I create seamless mobile applications with Flutter and Kotlin to deliver smooth, user-friendly experiences.</p>
            </div>
        </div>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="min-h-screen bg-white flex flex-col items-center justify-center px-6 py-12">
        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-between space-y-6 lg:space-y-0 lg:space-x-8 max-w-6xl">
            <!-- Left Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mzalendo - Android App</h2>
                <p class="text-gray-600 mb-6">
                   Mzalendo is an interactive game. You get to pick from different categories and answer questions. The game is designed to be fun and educational on Kenyan matters. 
                   It is a great way to experience Kenya in a humorous way, and get to know random facts.
                </p>
                <p class="text-gray-500 text-xs italic mb-8">
                    Disclaimer: This app is a continuous development app; hence changes and updates are done regularly.
                </p>
                <a href="https://play.google.com/store/apps/details?id=com.mzalendo.quizapp&hl=en" target="_blank" class="inline-block bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600 transition">
                    Download from Play Store
                </a>
            </div>

            <!-- Right Slideshow -->
            <div class="lg:w-1/2 relative">
                <div class="relative w-full h-auto overflow-hidden rounded shadow-lg">
                    <div class="slideshow relative">
                        <img src="{{ asset('images/mzalendo1.jpg') }}" alt="Screenshot 1" class="absolute inset-0 w-full h-auto object-contain opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo2.jpg') }}" alt="Screenshot 2" class="absolute inset-0 w-full h-auto object-contain opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo3.jpg') }}" alt="Screenshot 3" class="absolute inset-0 w-full h-auto object-contain opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo4.jpg') }}" alt="Screenshot 4" class="absolute inset-0 w-full h-auto object-contain opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo5.jpg') }}" alt="Screenshot 5" class="absolute inset-0 w-full h-auto object-contain opacity-0 transition-opacity duration-500 ease-in-out">
                    </div>
                </div>
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-gray-800 transition" id="prev">
                    &#8592;
                </button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-gray-800 transition" id="next">
                    &#8594;
                </button>
            </div>
        </div>
    </section>

    {{-- Other Projects Section --}}
    <section id="projects2" class="min-h-screen bg-gray-100 px-6 py-12 flex items-center">
        <div class="w-full">
            <h2 class="text-2xl font-bold text-center mb-12">More Projects done</h2>
        
    
            <div class="flex justify-between items-center w-full max-w-7xl mx-auto">
                {{-- SkyCast --}}
                <div class="cursor-pointer group relative bg-white shadow-sm border border-slate-200 rounded-lg w-64 hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-40 overflow-hidden text-white rounded-t-md">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-110" 
                            src="{{ asset('images/skycast.jpg') }}" alt="Skycast screenshot" />
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-lg font-semibold">SkyCast</h6>
                        <p class="text-slate-600 text-sm leading-normal font-light">
                            A mobile weather app built with Dart and Flutter that provides real-time weather updates using OpenWeatherAPI.
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0">
                        <button class="rounded-md bg-slate-800 py-2 px-4 text-sm text-white transition hover:bg-slate-700">
                            Get Apk
                        </button>
                    </div>
                </div>
    
                {{-- Nairobi Temperatures --}}
                <div class="cursor-pointer group relative bg-white shadow-sm border border-slate-200 rounded-lg w-64 hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-40 overflow-hidden text-white rounded-t-md">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-110" 
                            src="{{ asset('images/skycast.jpg') }}" alt="Skycast screenshot" />
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-lg font-semibold">Nairobi Temperature Prediction</h6>
                        <p class="text-slate-600 text-sm leading-normal font-light">
                            A machine learning model trained using temperature records from 1990 to 2019 to predict Nairobi temperatures.
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0">
                        <a href="https://github.com/Moses-Mbugs/Nairobi-temperature"  class="rounded-md bg-slate-800 py-2 px-4 text-sm text-white transition hover:bg-slate-700">
                            Github Link
                        </a>
                    </div>
                </div>
    
                {{-- Random App --}}
                <div class="cursor-pointer group relative bg-white shadow-sm border border-slate-200 rounded-lg w-64 hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-40 overflow-hidden text-white rounded-t-md">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-110" 
                            src="{{ asset('images/skycast.jpg') }}" alt="Skycast screenshot" />
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-lg font-semibold">The Random App</h6>
                        <p class="text-slate-600 text-sm leading-normal font-light">
                            A Flutter app featuring "Did You Know" facts in various categories, with a Retro-Neobrutalism design.
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0">
                        <button class="rounded-md bg-slate-800 py-2 px-4 text-sm text-white transition hover:bg-slate-700">
                            Learn more
                        </button>
                    </div>
                </div>
    
                {{-- Comic App --}}
                <div class="cursor-pointer group relative bg-white shadow-sm border border-slate-200 rounded-lg w-64 hover:shadow-lg transition-shadow duration-300">
                    <div class="relative h-40 overflow-hidden text-white rounded-t-md">
                        <img class="transition-transform duration-500 ease-in-out transform group-hover:scale-110" 
                            src="{{ asset('images/skycast.jpg') }}" alt="Skycast screenshot" />
                    </div>
                    <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-lg font-semibold">The Comic/Book App</h6>
                        <p class="text-slate-600 text-sm leading-normal font-light">
                            A Flutter app for comic and book lovers to explore free and paid books.
                        </p>
                    </div>
                    <div class="px-4 pb-4 pt-0">
                        <button class="rounded-md bg-slate-800 py-2 px-4 text-sm text-white transition hover:bg-slate-700">
                            Get the book
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- Professional Work Section --}}
    <section id="professional-work" class="min-h-screen bg-gray-100">
        <!-- Professional Work Content -->
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="min-h-screen bg-white">
        <!-- Contact Page Content -->
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slideshow img');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            let currentSlide = 0;
            const totalSlides = slides.length;
    
            const showSlide = (index) => {
                slides.forEach((slide, i) => {
                    slide.style.opacity = i === index ? '1' : '0';
                });
            };
    
            const nextSlide = () => {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            };
    
            const prevSlide = () => {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            };
    
            // Set up interval for auto slide
            let slideInterval = setInterval(nextSlide, 3000);
    
            // Add event listeners for arrows
            nextButton.addEventListener('click', () => {
                clearInterval(slideInterval);
                nextSlide();
                slideInterval = setInterval(nextSlide, 3000); // Restart auto slide
            });
    
            prevButton.addEventListener('click', () => {
                clearInterval(slideInterval);
                prevSlide();
                slideInterval = setInterval(nextSlide, 3000); // Restart auto slide
            });
    
            // Initialize first slide
            showSlide(currentSlide);
        });
    </script>
    
@endsection




