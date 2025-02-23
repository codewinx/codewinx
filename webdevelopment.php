<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Services - CodeWinx IT Solutions</title>
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
                <h1 class="text-5xl font-bold text-center mb-4 fade-in">Web Development Services</h1>
                <p class="text-xl text-center max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">Crafting visually stunning and highly functional websites that drive business growth.</p>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-8 mt-8">
            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold text-center mb-14">Why Choose Our Web Development Services?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Responsive Design</h3>
                        <p class="text-gray-600">Our websites look great and function flawlessly on all devices, from desktop to mobile.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Performance Optimization</h3>
                        <p class="text-gray-600">We ensure your website loads quickly and performs smoothly for the best user experience.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">SEO-Friendly</h3>
                        <p class="text-gray-600">We build websites with search engine optimization in mind, helping you rank higher in search results.</p>
                    </div>
                </div>
            </section>
<!-- New section for DWeb Development Examples -->
<section class="mb-16 fade-in" style="animation-delay: 0.6s;">
    <h2 class="text-3xl font-bold text-center mb-8">Decentralized Web Development Examples</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Decentralized Storage</h3>
            <p class="text-gray-600">Build applications using IPFS, Filecoin, or Sia for secure, distributed data storage.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">DeFi Applications</h3>
            <p class="text-gray-600">Develop decentralized finance apps using smart contracts on Ethereum or other blockchains.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Decentralized Identity</h3>
            <p class="text-gray-600">Implement self-sovereign identity solutions using DIDs and verifiable credentials.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">dApps Development</h3>
            <p class="text-gray-600">Create decentralized applications with front-end frameworks integrated with blockchain back-ends.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">Decentralized Media</h3>
            <p class="text-gray-600">Build platforms for content sharing and streaming using decentralized protocols.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="text-xl font-semibold mb-2">DAO Frameworks</h3>
            <p class="text-gray-600">Develop tools and interfaces for Decentralized Autonomous Organizations.</p>
        </div>
    </div>
</section>
            <section class="mb-16 fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl font-bold text-center mb-12">Our Web Development Process</h2>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                    <div class="space-y-16">
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">1</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Discovery and Planning</h3>
                                    <p class="text-gray-600">We start by understanding your business goals and target audience to create a tailored web strategy that aligns with your vision and objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Design and Prototyping</h3>
                                    <p class="text-gray-600">Our talented designers create visually appealing mockups and interactive prototypes, ensuring your website not only looks great but also provides an intuitive user experience.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">2</div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">3</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Development and Testing</h3>
                                    <p class="text-gray-600">Our expert developers bring the designs to life, crafting clean, efficient code and ensuring full functionality across all devices and browsers for a seamless user experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Launch and Maintenance</h3>
                                    <p class="text-gray-600">We carefully deploy your website and provide ongoing support and maintenance, ensuring optimal performance and keeping your site up-to-date with the latest web technologies.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-16  fade-in" style="animation-delay: 0.8s; margin-top: 10rem;">
                <h2 class="text-3xl font-bold text-center mb-8">Ready to Start Your Web Development Project?</h2>
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