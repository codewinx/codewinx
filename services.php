<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - CodeWinX IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
<style>
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
<body class="">
    <div class="flex flex-col min-h-[100dvh]">
        <!--additng navbar code here file including-->
        <div id="navbar" class=""></div>
    
        <script>
            fetch('navbar.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('navbar').innerHTML = data;
                })
                .catch(error => console.error('Error fetching the navbar:', error));
        </script>
    <header class="headerfootercolor text-white py-4 px-6 sticky top-0 z-50 shadow-lg transition-all duration-300 ease-in-out">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-4xl font-bold text-center">Our Services</h1>
        </div>
    </header>

    <main class="container mx-auto max-w-6xl py-12">
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">Transforming Your Business with CodeWinX IT Solutions</h2>
            <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto">
                At CodeWinX IT Solutions, we offer a comprehensive suite of services designed to drive your business forward in the digital age. Explore how our expertise can help you achieve your goals.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Web Development</h3>
                <p class="text-gray-600 mb-6">
                    Crafting visually stunning and highly functional websites that drive business growth. Our expert team combines cutting-edge technologies with user-centric design to create powerful online experiences.
                </p>
                <a href="webdevelopment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Mobile Development -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                    <path d="M12 18h.01"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Mobile Development</h3>
                <p class="text-gray-600 mb-6">
                    Developing cutting-edge mobile apps that provide seamless user experiences. We create native and cross-platform solutions that engage your audience and drive results on any device.
                </p>
                <a href="mobiledevelopment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
            </div>

            <!-- DevOps -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="2" y1="7" x2="22" y2="7"></line>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                    <path d="M6 11h4"></path>
                    <path d="M14 11h4"></path>
                    <path d="M6 15h4"></path>
                    <path d="M14 15h4"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Enterprise Application</h3>
                <p class="text-gray-600 mb-6">
                    Developing robust and scalable enterprise applications tailored to your organization's needs. We create comprehensive, secure solutions that integrate seamlessly, optimize workflows, and drive efficiency across your entire business ecosystem.
                </p>
                <a href="enterpricedevelopment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
            </div>

            <!-- UX/UI Design -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <path d="m9.06 11.9 8.07-8.06a2.85 2.85 0 1 1 4.03 4.03l-8.06 8.08"></path>
                    <path d="M7.07 14.94c-1.66 0-3 1.35-3 3.02 0 1.33-2.5 1.52-2 2.02 1.08 1.1 2.49 2.02 4 2.02 2.2 0 4-1.8 4-4.04a3.01 3.01 0 0 0-3-3.02z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">UX/UI Design</h3>
                <p class="text-gray-600 mb-6">
                    Crafting intuitive and visually appealing user experiences that captivate your audience. Our design team focuses on creating interfaces that are both beautiful and functional, ensuring user satisfaction and engagement.
                </p>
                <a href="uiuxdeveloment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Database Solutions -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Desktop Application</h3>
                <p class="text-gray-600 mb-6">
                    Crafting powerful and user-friendly desktop applications tailored to your specific needs. We develop high-performance, cross-platform solutions that enhance productivity and streamline your business processes.
                </p>
                <a href="desktopdevelopment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Billing Software -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mb-6 text-blue-600">
                    <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Billing Software</h3>
                <p class="text-gray-600 mb-6">
                    Leveraging cloud technologies to scale your infrastructure and optimize performance. Our cloud experts help you migrate, manage, and secure your applications in the cloud, enabling flexibility and cost-efficiency.
                </p>
                <a href="billingdevelopment.php" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">Learn More</a>
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
            .catch(error => console.error('Error fetching the navbar:', error));
    </script>
</body>
</html>