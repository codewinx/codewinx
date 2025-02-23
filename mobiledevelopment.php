<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development Services - CodeWinX IT Solutions</title>
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
                <h1 class="text-5xl font-bold text-center mb-4 fade-in">Mobile App Development Services</h1>
                <p class="text-xl text-center max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">Creating innovative and user-friendly mobile applications for iOS and Android platforms.</p>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12" style="margin-top: 2rem; ">
            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold text-center mb-8" style="padding-bottom: 2rem;">Why Choose Our Mobile App Development Services?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Cross-Platform Development</h3>
                        <p class="text-gray-600">We create apps that work seamlessly on both iOS and Android platforms.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Secure and Scalable</h3>
                        <p class="text-gray-600">Our apps are built with security in mind and can scale as your business grows.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">User-Centric Design</h3>
                        <p class="text-gray-600">We focus on creating intuitive and engaging user experiences.</p>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl font-bold text-center mb-12">Our Mobile App Development Process</h2>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                    <div class="space-y-16">
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">1</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Concept and Planning</h3>
                                    <p class="text-gray-600">We work with you to define your app's goals, target audience, and key features.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">UI/UX Design</h3>
                                    <p class="text-gray-600">Our designers create intuitive and visually appealing interfaces for your app.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">2</div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">3</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Development and Testing</h3>
                                    <p class="text-gray-600">Our developers bring your app to life, ensuring it's bug-free and performs well on all devices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Launch and Support</h3>
                                    <p class="text-gray-600">We help you launch your app on app stores and provide ongoing support and updates.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.8s; margin-top: 10rem;">
                <h2 class="text-3xl font-bold text-center mb-8">Ready to Start Your Mobile App Project?</h2>
                <div class="text-center">
                    <a href="#" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700 text-lg font-semibold">Get a Free Consultation</a>
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