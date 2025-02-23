<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="headerfootercolor text-white py-4 px-6 sticky top-0 z-50 shadow-lg transition-all duration-300 ease-in-out fixed">
        <div class="container mx-auto flex items-center justify-between">
          <a class="flex items-center gap-2 hover:scale-105 transition-transform duration-300" href="#">
            <img src="./CodeWinX-logo-Transparent-PNG.png" alt="TechNova Solutions Logo" class="h-10 w-auto">
            <!-- <span class="font-bold text-xl">Codewinx Solutions</span> -->
          </a>
          
          <nav class="hidden xl:flex items-center gap-8">
            <div class="group relative">
              <a class="hover:text-yellow-300 transition-colors duration-300" href="index.php">Home</a>

              <!-- <div class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Web Development</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Mobile Apps</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Cloud Solutions</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">AI & Machine Learning</a>
                </div>
              </div> -->
            </div>
            <a class="hover:text-yellow-300 transition-colors duration-300" href="services.php">Services</a>

            <a class="hover:text-yellow-300 transition-colors duration-300" href="#">Projects</a>
            <a class="hover:text-yellow-300 transition-colors duration-300" href="aboutus.php  ">About</a>
            <a class="hover:text-yellow-300 transition-colors duration-300" href="career.php">Careers</a>
            <a class="hover:text-yellow-300 transition-colors duration-300" href="contactus.php">Contact</a>
          </nav>
          
          <div class="hidden xl:flex items-center gap-4">
            <a href="consulationpage.php" class="bg-yellow-400 hover:bg-yellow-500 text-indigo-900 font-semibold px-4 py-2 rounded-md transition-colors duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
              Get a Free Consultation
            </a>
            <!-- <a href="#" class="text-white hover:text-yellow-300 transition-colors duration-300">
              Client Portal
            </a> -->
          </div>
          
          <button id="mobile-menu-button" class="xl:hidden focus:outline-none" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div id="mobile-menu" class="hidden xl:hidden mt-4 bg-indigo-700">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Services</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Projects</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">About</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Blog</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Careers</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Contact</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500">Client Portal</a>
          </div>
          <div class="px-5 py-4">
            <a href="#" class="block bg-yellow-400 hover:bg-yellow-500 text-center text-indigo-900 font-semibold px-4 py-2 rounded-md transition-colors duration-300">
              Get a Free Consultation
            </a>
          </div>
        </div>
      </header>
      
      <script>
        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
      </script>
</body>
</html>