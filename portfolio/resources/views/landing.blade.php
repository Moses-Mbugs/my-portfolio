@extends('layouts.app')

@section('content')
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
                <a href="#expertise" class="mt-auto pb-9">
                    <button class="animate-bounce w-10 h-10 bg-green-900 rounded-full flex items-center justify-center shadow-lg text-white">
                        ↓
                    </button>
                </a>
        </div>
    </section>
    <!-- Add placeholders for other sections -->
     
    <section id="expertise" class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-6">
        <!-- Section Heading -->
        <h2 class="text-4xl font-bold mb-12">My Expertise</h2>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl">
            <!-- Front-End Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Front-End Development</h3>
                <p class="text-gray-700">I specialize in crafting responsive, user-friendly interfaces using modern technologies like React, Vue, and Tailwind CSS.</p>
            </div>

            <!-- Back-End Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Back-End Development</h3>
                <p class="text-gray-700">I build robust server-side solutions with frameworks like Node.js, Django, and Laravel, ensuring high performance and scalability.</p>
            </div>

            <!-- Mobile App Development Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">Mobile App Development</h3>
                <p class="text-gray-700">I create seamless mobile applications with React Native and Flutter to deliver smooth, user-friendly experiences.</p>
            </div>
        </div>
    </section>

    <section id="projects" class="min-h-screen bg-white">
        <!-- My Projects Content -->
    </section>
    <section id="professional-work" class="min-h-screen bg-gray-100">
        <!-- Professional Work Content -->
    </section>
    <section id="contact" class="min-h-screen bg-white">
        <!-- Contact Page Content -->
    </section>
@endsection
