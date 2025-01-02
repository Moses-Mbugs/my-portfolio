@extends('layouts.app')

@section('content')
    <section id="intro" class="min-h-screen flex items-center justify-center bg-white">
        <div class="flex items-center space-x-8">
            <img src="{{ asset('images/avatar.jpg') }}" alt="Avatar" class="w-32 h-32 rounded-full shadow-lg">
            <div>
                <h1 class="text-4xl font-bold">Hello there, I’m Moses Mbugua</h1>
                <p class="mt-2">A passionate developer and artist with a love for building beautiful solutions.</p>
                <a href="/path-to-cv.pdf" download class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
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
    <section id="expertise" class="min-h-screen bg-gray-100">
        <!-- My Expertise Content -->
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
