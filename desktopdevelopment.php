<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop Application Services - CodeWinX IT Solutions</title>
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
                <h1 class="text-5xl font-bold text-center mb-4 fade-in">Desktop Application Services</h1>
                <p class="text-xl text-center max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">Empowering your business with efficient, user-friendly, and high-performance desktop applications.</p>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12" style="margin-top: 2rem;">
            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold text-center mb-8" style="padding-bottom: 2rem;">Why Choose Our Desktop Application Services?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Optimized Performance</h3>
                        <p class="text-gray-600">Our desktop applications are optimized for speed and efficiency, ensuring smooth performance.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Robust Security</h3>
                        <p class="text-gray-600">We implement advanced security measures to protect your sensitive data.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">User-Friendly Design</h3>
                        <p class="text-gray-600">Our applications are designed with the end-user in mind, ensuring a seamless user experience.</p>
                    </div>
                </div>
            </section>

           <!-- Desktop Application Examples -->
<section class="mb-16 fade-in" style="animation-delay: 0.6s;">
    <h2 class="text-3xl font-bold text-center mb-8">Desktop Application Examples</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Data Analysis Tools</h3>
            <p class="text-gray-600">Powerful desktop applications for complex data processing and visualization.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Graphic Design Software</h3>
            <p class="text-gray-600">Feature-rich applications for professional graphic design and image editing.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Project Management Tools</h3>
            <p class="text-gray-600">Desktop apps for efficient task management, time tracking, and team collaboration.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Media Players</h3>
            <p class="text-gray-600">Customizable desktop media players with advanced playback features and library management.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">System Utilities</h3>
            <p class="text-gray-600">Efficient tools for system optimization, backup, and maintenance tasks.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Development IDEs</h3>
            <p class="text-gray-600">Powerful integrated development environments for various programming languages.</p>
        </div>
    </div>
</section>

<section class="mb-16 fade-in" style="animation-delay: 0.6s;">
    <h2 class="text-3xl font-bold text-center mb-12">Our Desktop Application Development Process</h2>
    <div class="relative">
        <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
        <div class="space-y-16">
            <div class="relative">
                <div class="flex items-center">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">1</div>
                    <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Concept and Planning</h3>
                        <p class="text-gray-600">We work closely with you to define the application's purpose, features, and target audience.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-end">
                    <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                        <h3 class="text-2xl font-semibold text-blue-600 mb-2">UI/UX Design</h3>
                        <p class="text-gray-600">Our designers create intuitive and visually appealing interfaces for your desktop application.</p>
                    </div>
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">2</div>
                </div>
            </div>
            <div class="relative">
                <div class="flex items-center">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">3</div>
                    <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Development and Testing</h3>
                        <p class="text-gray-600">We use efficient coding practices and thorough testing to ensure a robust and reliable application.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="flex items-center justify-end">
                    <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                        <h3 class="text-2xl font-semibold text-blue-600 mb-2">Deployment and Support</h3>
                        <p class="text-gray-600">We assist with application deployment and provide ongoing support and updates.</p>
                    </div>
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">4</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-16 fade-in" style="animation-delay: 0.8s; margin-top: 10rem;">
    <h2 class="text-3xl font-bold text-center mb-8">Ready to Build Your Desktop Application?</h2>
    <div class="text-center">
        <a href="#" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700 text-lg font-semibold">Get Started Today</a>
    </div>
</section>

        </main>
            
        <div id="footer" class=""></div>

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
