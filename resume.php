<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Resume - CodeWinX IT Solutions</title>
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
                <h1 class="text-4xl font-bold text-center">Submit Your Resume</h1>
            </div>
        </header>

        <main class="container mx-auto max-w-6xl py-12 flex-grow">
            <section class="mb-16 fade-in" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Join Our Talent Pool</h2>
                <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto">
                    We're always looking for talented individuals to join our team. Even if you don't see a current opening that matches your skills, we'd love to hear from you!
                </p>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.4s;">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600">Why Join CodeWinx?</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Innovative projects and cutting-edge technologies
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Collaborative and supportive work environment
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Opportunities for professional growth and development
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Competitive salary and benefits package
                        </li>
                    </ul>
                </div>

                <form id="resumeForm" class="bg-white p-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl fade-in" style="animation-delay: 0.6s;">
                    <h3 class="text-2xl font-bold mb-6 text-blue-600">Submit Your Information</h3>
                    <div class="space-y-6">
                        <div class="relative">
                            <input type="text" id="name" name="name" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="Your Name" required>
                            <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Your Name</label>
                        </div>
                        <div class="relative">
                            <input type="email" id="email" name="email" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="Email Address" required>
                            <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                        </div>
                        <div class="relative">
                            <input type="tel" id="phone" name="phone" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="Phone Number">
                            <label for="phone" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Phone Number (Optional)</label>
                        </div>
                        <div class="relative mt-3">
                            <select id="position" name="position" class="mt-3 peer h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" required>
                                <option value="" disabled selected>Select preferred position</option>
                                <option value="developer">Developer</option>
                                <option value="designer">Designer</option>
                                <option value="project-manager">Project Manager</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="position" class="absolute left-0 -top-3.5 text-gray-600 text-sm">Preferred Position</label>
                        </div>
                        <div class="relative">
                            <textarea id="message" name="message" rows="4" class="peer h-auto w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-blue-600" placeholder="Additional Information"></textarea>
                            <label for="message" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Additional Information (Optional)</label>
                        </div>
                        <div class="relative">
                            <input type="file" id="resume" name="resume" class="hidden" accept=".pdf,.doc,.docx" required>
                            <label for="resume" class="cursor-pointer flex items-center justify-center w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                Upload Resume (PDF, DOC, DOCX)
                            </label>
                            <p id="file-name" class="mt-2 text-sm text-gray-500"></p>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="consent" name="consent" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
                            <label for="consent" class="ml-2 block text-sm text-gray-900">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a> and <a href="#" class="text-blue-600 hover:underline">terms of service</a>.
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Submit Application
                            </button>
                        </div>
                    </div>
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

            document.getElementById('resume').addEventListener('change', function(e) {
                var fileName = e.target.files[0].name;
                document.getElementById('file-name').textContent = 'Selected file: ' + fileName;
            });

            $(document).ready(function() {
                $('#resumeForm').on('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting the default way
                    var formData = new FormData(this);
                    $.ajax({
                        url: 'submit_resume.php', // You'll need to create this PHP file
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('#formMessage').php('<p class="text-green-500">' + response + '</p>');
                            $('#resumeForm')[0].reset(); // Reset the form after successful submission
                            $('#file-name').text(''); // Clear the file name display
                        },
                        error: function() {
                            $('#formMessage').php('<p class="text-red-500">There was an error submitting your application. Please try again later.</p>');
                        }
                    });
                });
            });
        </script>
    </div>
</body>
</html>