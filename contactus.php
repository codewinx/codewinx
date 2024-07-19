<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CodeWinX IT Solutions</title>
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
                <h1 class="text-4xl font-bold text-center">Contact Us</h1>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12 flex-grow">
            <section class="mb-16 fade-in" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Get in Touch with CodeWinX IT Solutions</h2>
                <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto">
                    We're here to answer any questions you may have about our services. Reach out to us and we'll respond as soon as we can.
                </p>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>9422315736</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>codewinxit@gmail.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Latur (Maharashtra) 413512</span>
                        </div>
                    </div>
                </div>
                <form id="contactForm" action="send_email.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.6s;">
    <!-- Name field -->
    <div class="relative mb-6">
        <input type="text" id="name" name="name" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Your Name" required>
        <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your Name</label>
    </div>

    <!-- Email field -->
    <div class="relative mb-6">
        <input type="email" id="email" name="email" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Email Address" required>
        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
    </div>

    <!-- Mobile field -->
    <div class="relative mb-6">
        <input type="tel" id="mobile" name="mobile" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Mobile Number" required pattern="[0-9]{10}">
        <label for="mobile" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Mobile Number</label>
    </div>

    <!-- Address field -->
    <div class="relative mb-6">
        <input type="text" id="address" name="address" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Address" required>
        <label for="address" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Address</label>
    </div>

    <!-- Subject field -->
    <div class="relative mb-6">
        <input type="text" id="subject" name="subject" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Subject" required>
        <label for="subject" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Subject</label>
    </div>

    <!-- Message field -->
    <div class="relative mb-6">
        <textarea id="message" name="message" rows="4" class="peer h-auto w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600 transition-colors duration-300" placeholder="Your Message" required></textarea>
        <label for="message" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your Message</label>
    </div>

    <!-- Consent checkbox -->
    <div class="flex items-center mb-6">
        <input type="checkbox" id="consent" name="consent" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
        <label for="consent" class="ml-2 block text-sm text-gray-900">
            I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a> and <a href="#" class="text-blue-600 hover:underline">terms of service</a>.
        </label>
    </div>

    <!-- Submit button -->
    <div>
        <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            Send Message
        </button>
    </div>

    <!-- Form message container -->
    <div id="formMessage" class="mt-4"></div>
</form>

           
            </div>

       
        </main>

        <div id="footer"></div>

        <script>


            fetch('footer.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('footer').innerHTML = data;
                })
                .catch(error => console.error('Error fetching the footer:', error));


                
  $(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'send_email.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $('#formMessage').html('<p class="text-green-500">' + response.message + '</p>');
                    $('#contactForm')[0].reset();
                } else {
                    $('#formMessage').html('<p class="text-red-500">' + response.message + '</p>');
                }
            },
            error: function() {
                $('#formMessage').html('<p class="text-red-500">There was an error sending your message. Please try again later.</p>');
            }
        });
    });
});

 
        </script>
        <script src="script.js"></script>
    </div>
    
</body>
</html>

