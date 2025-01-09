
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

#intro 
h1 {
    font-family: 'Courier New', Courier, monospace;
}
#intro 
p {
    font-family: 'Roboto', sans-serif;
}
#
dynamic-text {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2d89ef; /* Custom color for dynamic text */
}

</style>
@endsection

@section('content')
    {{-- Intro Section --}}
    <section id="intro" class="min-h-screen flex items-center justify-center bg-black">
        <div class="text-left">
            <h1 class="text-6xl font-extrabold text-gray-100 mb-4">
                &lt; Hello, World!/&gt;
            </h1>
            <p class="text-4xl font-semibold text-gray-300 mb-4" >
                My name is <span class="text-blue-500">Moses Mbugua</span>
            </p>
            <p class="text-3xl font-medium text-gray-200" >
                I am a <span id="dynamic-text" class="text-green-500"></span>
            </p>
        </div>
        <!-- Scroll Button -->
        <a href="#expertise" class="absolute bottom-6 animate-bounce">
            <button class="w-10 h-10 bg-green-900 rounded-full flex items-center justify-center shadow-lg text-white">
                ↓
            </button>
        </a>
    </section>

    {{-- Expertise Section --}}
    <section id="expertise" class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-zinc-950 px-6 py-16 text-white">
        <h2 class="text-5xl font-extrabold mb-12 tracking-wide text-center">My Expertise</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl">
            <!-- Front-End Development Card -->
            <div class="bg-gray-800 shadow-lg rounded-xl p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="text-green-400 text-5xl mb-6">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Front-End Development</h3>
                <p class="text-gray-300 leading-relaxed">
                    I specialize in crafting responsive, user-friendly interfaces using modern technologies like React and Tailwind CSS.
                </p>
                {{--  <ul>
                    <li>React</li>
                    <li>Tailwind CSS</li>
                    <li>CSS</li>
                    <li>Rive</li>
                  </ul>  --}}
            </div>
            <!-- Back-End Development Card -->
            <div class="bg-gray-800 shadow-lg rounded-xl p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="text-blue-400 text-5xl mb-6">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Back-End Development</h3>
                <p class="text-gray-300 leading-relaxed">
                    I build robust server-side solutions with frameworks like Node.js and Laravel, ensuring high performance and scalability.
                </p>
            </div>
            <!-- Mobile App Development Card -->
            <div class="bg-gray-800 shadow-lg rounded-xl p-8 text-center transform hover:scale-105 transition-transform duration-300">
                <div class="text-yellow-400 text-5xl mb-6">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">Mobile App Development</h3>
                <p class="text-gray-300 leading-relaxed">
                    I create seamless mobile applications with Flutter and Kotlin to deliver smooth, user-friendly experiences.
                </p>
            </div>
        </div>
    </section>






    {{-- Projects Section --}}
    <section id="projects" class="min-h-screen bg-zinc-900 flex flex-col items-center justify-center px-6 py-12">
        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-between space-y-6 lg:space-y-0 lg:space-x-8 max-w-6xl">
            <h2 class="text-4xl font-extrabold text-gray-100 mb-8">Featured Project</h2>
            <!-- Left Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                
                <h2 class="text-3xl font-bold text-gray-100 mb-4">
                    Mzalendo - Android App</h2>
                <p class="text-gray-200 mb-6">
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
            <div class="lg:w-1/2 relative flex justify-center">
                <div class="relative w-[200px] h-[400px] overflow-hidden rounded-lg shadow-lg">
                    <div class="slideshow relative flex flex-col items-center h-full">
                        <!-- Vertical Images -->
                        <img src="{{ asset('images/mzalendo1.jpg') }}" alt="Screenshot 1" 
                            class="absolute w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo2.jpg') }}" alt="Screenshot 2" 
                            class="absolute w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo3.jpg') }}" alt="Screenshot 3" 
                            class="absolute w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo4.jpg') }}" alt="Screenshot 4" 
                            class="absolute w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="{{ asset('images/mzalendo5.jpg') }}" alt="Screenshot 5" 
                            class="absolute w-full h-full object-cover rounded-lg opacity-0 transition-opacity duration-500 ease-in-out">
                    </div>
                </div>
                <!-- Navigation Buttons -->
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
    <section id="projects2" class="min-h-screen bg-gray-50 px-6 py-12 flex flex-col items-center justify-center">
        <div class="w-full max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-16">
                Featured Projects
            </h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- SkyCast -->
                <div class="group relative bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/skycast.jpg') }}" alt="SkyCast" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">SkyCast</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            A mobile weather app built with Dart and Flutter, providing real-time weather updates via OpenWeatherAPI.
                        </p>
                        <a href="#" class="inline-block text-sm font-medium text-green-500 hover:text-green-600">
                            Get APK &rarr;
                        </a>
                    </div>
                </div>
    
                <!-- Nairobi Temperatures -->
                <div class="group relative bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/skycast.jpg') }}" alt="Nairobi Temperatures" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Nairobi Temperature Prediction</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            A machine learning model trained with 30 years of data to predict Nairobis temperatures.
                        </p>
                        <a href="https://github.com/Moses-Mbugs/Nairobi-temperature" class="inline-block text-sm font-medium text-green-500 hover:text-green-600">
                            GitHub Link &rarr;
                        </a>
                    </div>
                </div>
    
                <!-- Random App -->
                <div class="group relative bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/skycast.jpg') }}" alt="Random App" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">The Random App</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            A Flutter app delivering "Did You Know" facts across categories, designed with a Retro-Neobrutalism aesthetic.
                        </p>
                        <a href="#" class="inline-block text-sm font-medium text-green-500 hover:text-green-600">
                            Learn More &rarr;
                        </a>
                    </div>
                </div>
    
                <!-- Comic App -->
                <div class="group relative bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/skycast.jpg') }}" alt="Comic App" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">The Comic/Book App</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            An app for comic and book enthusiasts to discover both free and paid titles.
                        </p>
                        <a href="#" class="inline-block text-sm font-medium text-green-500 hover:text-green-600">
                            Get the Book &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    



    
    
        {{-- Professional Work Section --}}
  
    <section id="professional-work" class="min-h-screen bg-gradient-to-r from-gray-50 to-white py-16 px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12">Professional Experience</h2>
            
            <div class="relative">
                <!-- Timeline Container -->
                <div class="timeline-container flex items-center overflow-x-auto space-x-16 p-8 border-t-2 border-gray-200">
                    <!-- Timeline Item 1 -->
                    <div class="timeline-item flex flex-col items-center w-64">
                        <div class="timeline-icon w-16 h-16 bg-green-500 rounded-full flex items-center justify-center text-white text-xl font-bold mb-4">
                            TCC
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center">Texas Cancer Center</h3>
                        <p class="text-sm text-gray-500 italic mb-4 text-center">Volunteer • Jan 2021 – Mar 2021</p>
                        <ul class="text-gray-700 text-sm space-y-2 text-center">
                            <li>• Managed housekeeping, bookkeeping, and data entry tasks.</li>
                            <li>• Enhanced communication skills through patient interaction.</li>
                            <li>• Fostered connections and developed empathy in healthcare settings.</li>
                        </ul>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="timeline-item flex flex-col items-center w-64">
                        <div class="timeline-icon w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold mb-4">
                            KU
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center">Kenyatta University Teaching Referral Research Hospital</h3>
                        <p class="text-sm text-gray-500 italic mb-4 text-center">Web Application Developer (Attachee) • Jan 2023 – Apr 2023</p>
                        <ul class="text-gray-700 text-sm space-y-2 text-center">
                            <li>• Built a comprehensive web application using Laravel.</li>
                            <li>• Developed round-robin scheduling for nurse intern placements.</li>
                            <li>• Successfully deployed the system with the team.</li>
                            <li>• Addressed intern management challenges in healthcare.</li>
                        </ul>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="timeline-item flex flex-col items-center w-64">
                        <div class="timeline-icon w-16 h-16 bg-red-500 rounded-full flex items-center justify-center text-white text-xl font-bold mb-4">
                            PC
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center">Palla Credit Limited</h3>
                        <p class="text-sm text-gray-500 italic mb-4 text-center">Business Developer Intern • Jan 2024 – Mar 2024</p>
                        <ul class="text-gray-700 text-sm space-y-2 text-center">
                            <li>• Proposed workflow automation and efficiency strategies.</li>
                            <li>• Recommended feedback systems to enhance customer satisfaction.</li>
                            <li>• Formulated short-term and long-term development goals.</li>
                        </ul>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="timeline-item flex flex-col items-center w-64">
                        <div class="timeline-icon w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center text-white text-xl font-bold mb-4">
                            CG
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center">Creatives Garage (NGO)</h3>
                        <p class="text-sm text-gray-500 italic mb-4 text-center">Web and Mobile Application Developer • May 2024 – Present</p>
                        <ul class="text-gray-700 text-sm space-y-2 text-center">
                            <li>• Maintained existing systems and optimized performance.</li>
                            <li>• Built custom mobile applications like <strong>Mzalendo</strong>.</li>
                            <li>• Enhanced websites with new functions and pages.</li>
                            <li>• Provided IT support across the organization.</li>
                        </ul>
                    </div>
                </div>

                <!-- Decorative Line -->
                {{--  <div class="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 transform -translate-y-1/2"></div>  --}}
            </div>
            {{--  <div class="mt-12">
                <p class="text-sm text-gray-500">
                    from left to right ''
                </p>
            </div>  --}}
        </div>
    </section>



                
    

   
    {{-- Contact Section --}}
    <section id="contact" class="min-h-screen bg-gradient-to-br from-gray-100 via-gray-50 to-white py-20 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-5xl font-extrabold text-gray-900 mb-8 tracking-tight">
                Get in Touch
            </h2>
            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                I’m available for select freelance projects and collaborations. Got a project in mind? Let’s team up and make it happen!
            </p>
            <p class="text-gray-700 mb-12 text-lg">
                Reach out through my socials or email below.
            </p>
    
            <!-- Social Media Links -->
            <div class="flex justify-center space-x-8 mb-16">
                <a href="https://github.com/moses-mbugs" target="_blank" class="text-gray-800 hover:text-gray-600 transition-transform transform hover:scale-110 text-3xl">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/moses-mbugua-muigai-01209620a/" target="_blank" class="text-blue-700 hover:text-blue-500 transition-transform transform hover:scale-110 text-3xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/mosaayyyy/" target="_blank" class="text-pink-600 hover:text-pink-400 transition-transform transform hover:scale-110 text-3xl">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
    
            <!-- Freelance Inquiry -->
            <div class="bg-white shadow-xl rounded-lg px-10 py-12 mx-auto max-w-4xl">
                <h3 class="text-3xl font-bold text-gray-800 mb-6">
                    Let’s Work Together
                </h3>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    Whether you’re looking for a developer to bring your project to life or collaborate on something exciting, feel free to reach out. I’m always open to new challenges and opportunities.
                </p>
                <a href="mailto:mbuguam323@gmail.com" class="inline-block bg-green-500 text-white font-semibold text-lg px-8 py-4 rounded-lg shadow-lg hover:bg-green-600 transition-transform transform hover:scale-105">
                    Contact Me: mbuguam323@gmail.com
                </a>
            </div>
        </div>
    </section>


    <script>
        const dynamicText = document.getElementById('dynamic-text');
        const roles = [
            'Junior Fullstack Developer  ',
            'Mobile Application Developer   '
        ];
        let index = 0;
        let charIndex = 0;
        let typing = true;

        function typeEffect() {
            if (typing) {
                dynamicText.textContent += roles[index][charIndex];
                charIndex++;
                if (charIndex === roles[index].length) {
                    typing = false;
                    setTimeout(() => (typing = false), 2000); // Pause before deleting
                }
            } else {
                dynamicText.textContent = dynamicText.textContent.slice(0, -1);
                if (dynamicText.textContent.length === 0) {
                    typing = true;
                    index = (index + 1) % roles.length;
                    charIndex = 0;
                }
            }
            setTimeout(typeEffect, typing ? 150 : 100);
        }
        document.addEventListener('DOMContentLoaded', () => {
            typeEffect();
        });

        {{--  slideshow   --}}
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




