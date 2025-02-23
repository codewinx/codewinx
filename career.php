<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - CodeWinX IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fade-in 0.5s ease-out forwards;
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

        <header class="headerfootercolor text-white py-4 px-6 sticky top-0 z-50 shadow-lg transition-all duration-300 ease-in-out">
            <div class="container mx-auto max-w-6xl">
                <h1 class="text-4xl font-bold text-center">Careers at CodeWinX IT Solutions</h1>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12 flex-grow">
            <section class="mb-16 fade-in" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Join Our Team of Innovators</h2>
                <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto">
                    At CodeWinx, we're always looking for talented individuals to help us push the boundaries of technology. Join us in creating innovative solutions that shape the future of IT.
                </p>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.4s;">
                <h3 class="text-2xl font-bold mb-6 text-blue-600">Why Work With Us?</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        <h4 class="text-xl font-semibold mb-2">Innovation-Driven Culture</h4>
                        <p class="text-gray-600">We encourage creativity and out-of-the-box thinking to solve complex problems.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h4 class="text-xl font-semibold mb-2">Continuous Learning</h4>
                        <p class="text-gray-600">We invest in our employees' growth with ongoing training and development opportunities.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h4 class="text-xl font-semibold mb-2">Collaborative Environment</h4>
                        <p class="text-gray-600">Work with diverse teams and contribute to cutting-edge projects in a supportive atmosphere.</p>
                    </div>
                </div>
            </section>

            <section class="mb-16 fade-in" style="animation-delay: 0.6s;">
                <h3 class="text-2xl font-bold mb-6 text-blue-600">Current Openings</h3>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold mb-2">Senior Full Stack Developer</h4>
                        <p class="text-gray-600 mb-4">We're seeking an experienced Full Stack Developer to join our dynamic team. You'll be responsible for developing and maintaining web applications using cutting-edge technologies.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Learn More & Apply</a>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold mb-2">Cloud Solutions Architect</h4>
                        <p class="text-gray-600 mb-4">Join our cloud team to design and implement scalable, high-performance cloud architectures for our clients. Experience with AWS, Azure, or GCP is required.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Learn More & Apply</a>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold mb-2">UI/UX Designer</h4>
                        <p class="text-gray-600 mb-4">We're looking for a creative UI/UX Designer to craft beautiful and intuitive user interfaces for our web and mobile applications.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Learn More & Apply</a>
                    </div>
                </div>
            </section>

            <section class="fade-in" style="animation-delay: 0.8s;">
                <h3 class="text-2xl font-bold mb-6 text-blue-600">Don't See a Fit? Send Us Your Resume</h3>
                <p class="text-gray-600 mb-6">We're always on the lookout for talented individuals. If you don't see a position that matches your skills, feel free to send us your resume for future opportunities.</p>
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors text-lg font-semibold">Submit Your Resume</a>
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