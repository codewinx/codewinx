<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CodeWinX IT Solutions</title>
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
<body>
    <div class="flex flex-col min-h-[100dvh]">
        <!-- Navbar inclusion -->
        <div id="navbar" class=" "></div>
        <script>
            fetch('navbar.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('navbar').innerHTML = data;
                })
                .catch(error => console.error('Error fetching the navbar:', error));
        </script>

        <header class="headerfootercolor text-white py-6 sticky top-0 z-50 shadow-lg transition-all duration-300 ease-in-out">
            <div class="container mx-auto max-w-6xl">
                <h1 class="text-4xl font-bold text-center">About CodeWinX IT Solutions</h1>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12">
            <section class="mb-16 bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6 text-blue-600">Welcome to CodeWinX IT Solutions</h2>
                <p class="text-xl text-gray-600 mb-4">
                    Where innovation meets dedication. Since our founding in 2023, we have been committed to delivering exceptional software solutions to our valued customers. Our team of passionate professionals works tirelessly to ensure the highest quality and satisfaction in everything we offer.
                </p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white p-8 rounded-lg shadow-lg float-animation">
                    <h3 class="text-2xl font-bold mb-4 text-blue-600">Our Mission</h3>
                    <p class="text-gray-600 italic">
                        "Our mission is to bring the best user experience to customers through innovative software and services."
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg float-animation">
                    <h3 class="text-2xl font-bold mb-4 text-blue-600">Our Vision</h3>
                    <p class="text-gray-600 italic">
                        "To be a global leader in the software development industry, recognized for our excellence, integrity, and positive impact on society."
                    </p>
                </div>
            </section>

            <section class="mb-16">
                <h3 class="text-3xl font-bold mb-6 text-center text-blue-600">Our Values</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold mb-2 text-blue-600">Integrity</h4>
                        <p class="text-gray-600">We uphold the highest standards of integrity in all of our actions.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold mb-2 text-blue-600">Customer Commitment</h4>
                        <p class="text-gray-600">We develop relationships that make a positive difference in our customers' lives.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold mb-2 text-blue-600">Quality</h4>
                        <p class="text-gray-600">We provide outstanding products and unsurpassed service that, together, deliver premium value to our customers.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold mb-2 text-blue-600">Teamwork</h4>
                        <p class="text-gray-600">We work together, across boundaries, to meet the needs of our customers and to help our company win.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold mb-2 text-blue-600">Respect for People</h4>
                        <p class="text-gray-600">We value our people, encourage their development, and reward their performance.</p>
                    </div>
                </div>
            </section>

            <section class="mb-16 text-center">
                <h3 class="text-3xl font-bold mb-6 text-blue-600">Join Us on Our Journey</h3>
                <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md transition-colors duration-300 hover:bg-blue-700">
                    Get In Touch
                </a>
            </section>

            <section class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6 text-blue-600">Contact Us</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <h4 class="font-bold mb-2">Email</h4>
                        <p class="text-gray-600">codewinxit@gmail.com</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">Phone</h4>
                        <p class="text-gray-600">9422315736</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">Address</h4>
                        <p class="text-gray-600">Latur (Maharashtra) 413512</p>
                    </div>
                </div>
            </section>

            <section class="mt-8 text-center">
                <h3 class="text-xl font-bold mb-4">Stay Connected</h3>
                <p class="text-gray-600">Follow us on our social media channels:</p>
                <!-- Add social media icons/links here -->
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

        <script src="script.js"></script>
    </div>
</body>
</html>
