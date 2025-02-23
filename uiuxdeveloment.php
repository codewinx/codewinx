<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design Services - CodeWinX IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-[100dvh]">
        <div id="navbar" class=""></div>
    
        <script>
            fetch('navbar.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('navbar').innerHTML = data;
                })
                .catch(error => console.error('Error fetching the navbar:', error));
        </script>

        <header class="headerfootercolor text-white py-16 px-6">
            <div class="container mx-auto max-w-6xl">
                <h1 class="text-5xl font-bold text-center mb-4 fade-in">UI/UX Design Services</h1>
                <p class="text-xl text-center max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">Creating intuitive, engaging, and visually appealing user interfaces for exceptional user experiences.</p>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12" style="margin-top: 2rem; ">
            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold text-center mb-8" style="padding-bottom: 2rem;">Why Choose Our UI/UX Design Services?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">User-Centered Design</h3>
                        <p class="text-gray-600">We prioritize user needs and preferences in every design decision.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Aesthetic Excellence</h3>
                        <p class="text-gray-600">We create visually stunning designs that enhance brand identity.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Usability-Focused</h3>
                        <p class="text-gray-600">We ensure intuitive navigation and smooth user flows in all our designs.</p>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl font-bold text-center mb-12">Our UI/UX Design Process</h2>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                    <div class="space-y-16">
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">1</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Research and Discovery</h3>
                                    <p class="text-gray-600">We analyze user needs, business goals, and industry trends to inform our design strategy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Wireframing and Prototyping</h3>
                                    <p class="text-gray-600">We create low-fidelity wireframes and interactive prototypes to visualize the user flow.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">2</div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">3</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Visual Design</h3>
                                    <p class="text-gray-600">We create high-fidelity designs that bring your brand to life with engaging visuals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">User Testing and Iteration</h3>
                                    <p class="text-gray-600">We conduct user testing and refine the design based on feedback for optimal user experience.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.8s; margin-top: 10rem;">
                <h2 class="text-3xl font-bold text-center mb-8">Ready to Enhance Your User Experience?</h2>
                <div class="text-center">
                    <a href="#" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700 text-lg font-semibold">Request a Design Consultation</a>
                </div>
            </section>
        </main>

        <div id="footer"></div>

        <script>
            fetch('footer.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('footer').innerHTML = data;
                })
                .catch(error => console.error('Error fetching the footer:', error));
        </script>
    </div>
</body>
</html>