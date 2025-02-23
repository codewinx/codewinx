<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Software Solutions - CodeWinX IT Solutions</title>
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
                <h1 class="text-5xl font-bold text-center mb-4 fade-in">Billing Software Solutions</h1>
                <p class="text-xl text-center max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">Streamline your financial operations with our powerful and user-friendly billing software.</p>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12" style="margin-top: 2rem; ">
            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h2 class="text-3xl font-bold text-center mb-8" style="padding-bottom: 2rem;">Why Choose Our Billing Software?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Easy-to-Use Interface</h3>
                        <p class="text-gray-600">Intuitive design for effortless billing and invoicing processes.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Secure and Compliant</h3>
                        <p class="text-gray-600">Ensures data protection and adherence to financial regulations.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 float-animation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Comprehensive Reporting</h3>
                        <p class="text-gray-600">Generate detailed financial reports for better decision-making.</p>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl font-bold text-center mb-12">Our Billing Software Implementation Process</h2>
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                    <div class="space-y-16">
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">1</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Requirements Analysis</h3>
                                    <p class="text-gray-600">We assess your business needs and define the necessary features for your billing software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Customization and Setup</h3>
                                    <p class="text-gray-600">We tailor the software to match your specific business processes and integrate it with your existing systems.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">2</div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">3</div>
                                <div class="ml-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Training and Deployment</h3>
                                    <p class="text-gray-600">We provide comprehensive training to your team and ensure smooth deployment of the software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-end">
                                <div class="mr-8 bg-white p-6 rounded-lg shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-1 w-full md:w-2/3 text-right">
                                    <h3 class="text-2xl font-semibold text-blue-600 mb-2">Ongoing Support and Updates</h3>
                                    <p class="text-gray-600">We provide continuous support and regular updates to keep your billing software running smoothly.</p>
                                </div>
                                <div class="flex-shrink-0 w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-2xl shadow-lg z-10 transition-all duration-300 hover:scale-110 hover:bg-blue-700">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.8s; margin-top: 10rem;">
                <h2 class="text-3xl font-bold text-center mb-8">Ready to Streamline Your Billing Process?</h2>
                <div class="text-center">
                    <a href="#" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700 text-lg font-semibold">Get a Free Demo</a>
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