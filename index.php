<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--
// v0 by Vercel.
// https://v0.dev/t/gN50boNiBeQ
-->

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
 <!--
// v0 by Vercel.
// https://v0.dev/t/SFZu8LwziSm
-->

<section class=" w-full  md:py-32 bg-cover bg-center  flex items-center justify-center" style="background-image: url('https://img.freepik.com/free-vector/blue-futuristic-waves-background-with-computer-code-technology_53876-119575.jpg?ga=GA1.1.916494451.1705399646&semt=ais_user');">
    <div class="container px-4 md:px-6 flex flex-col items-center text-center space-y-8  z-10">
      <h1 class="text-3xl md:text-5xl font-bold tracking-tight text-white animate-fade-in">
        Unleash Your Digital Potential with CodeWinX IT Solutions
      </h1>
      <p class="max-w-[600px] text-center md:text-xl  animate-fade-in-up " style="color: gold;">
        Transform your business with cutting-edge software solutions. Our expert team guides you every step of the way.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up">
        <a
          href="#"
          class=" inline-flex h-12 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-white shadow transition-colors hover:bg-primary-dark focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary"
        >
          Get a Free Consultation
        </a>
    
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-12 animate-fade-in-up">
        <div class="bg-white rounded-lg shadow-md p-5 transition-transform hover:scale-100">
          <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          <h3 class="text-2xl font-bold mb-4">Streamline Workflows</h3>
          <p class="text-gray-600">
            Optimize your business processes, saving time and increasing efficiency across your organization.
          </p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transition-transform hover:scale-105">
          <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
          <h3 class="text-2xl font-bold mb-4">Boost Productivity</h3>
          <p class="text-gray-600">Empower your team with intuitive tools that enhance collaboration and drive results.</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transition-transform hover:scale-105">
          <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
          <h3 class="text-2xl font-bold mb-4">Gain Competitive Edge</h3>
          <p class="text-gray-600">
            Stay ahead of the curve with our cutting-edge technology and innovative solutions.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-20 px-6 flex items-center justify-center bg-gray-50 overflow-hidden">
    <div class="container mx-auto max-w-4xl">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primary animate-fade-in-down">Welcome to CodeWinX IT Solutions</h2>
        <div class="w-24 h-1 bg-primary mx-auto mt-4 mb-8 animate-scale-x"></div>
      </div>
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 animate-slide-in-left">
          <p class="text-lg text-gray-700">
            We are a comprehensive software development company specializing in creating innovative digital solutions for businesses of all sizes.
          </p>
          <p class="text-lg text-gray-700">
            With our expertise in web development, mobile development, DevOps, and UX/UI design, we help our clients achieve their goals and stay ahead of the competition.
          </p>
          <a href="#" class="inline-flex items-center text-primary hover:underline group">
            Learn more about our services
            <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </a>
        </div>
        <div class="relative animate-slide-in-right">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJysjZn23Gz4GMD1PeqAFtgL7npjj6NyQK2w&s" alt="CodeWinX IT Solutions Team" class=" w-full rounded-lg shadow-lg transition-transform hover:scale-105 duration-300">
         
        </div>
      </div>
      <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="animate-fade-in-up delay-300 hover:animate-pulse  ">
          <h3 class="text-3xl font-bold text-primary animate-count-up" data-target="100">0</h3>
          <p class="text-gray-600">Happy Clients</p>
        </div>
        <div class="animate-fade-in-up delay-400 hover:animate-pulse">
          <h3 class="text-3xl font-bold text-primary animate-count-up" data-target="500">0</h3>
          <p class="text-gray-600">Projects Completed</p>
        </div>
        <div class="animate-fade-in-up delay-500 hover:animate-pulse">
          <h3 class="text-3xl font-bold text-primary animate-count-up" data-target="50">0</h3>
          <p class="text-gray-600">Expert Developers</p>
        </div>
        <div class="animate-fade-in-up delay-600 hover:animate-pulse">
          <h3 class="text-3xl font-bold text-primary">24/7</h3>
          <p class="text-gray-600">Support</p>
        </div>
      </div>
    </div>
  </section>
    <section class="flex flex-col min-h-[100dvh]">
      <header class="bg-gradient-to-br from-blue-600 to-purple-600 text-white">
        <div class="container mx-auto max-w-6xl py-20 px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Transform Your Business with CodeWinX</h1>
                    <p class="text-xl mb-8">Innovative IT solutions to drive your success in the digital age.</p>
                    <a href="services.php" class="inline-block px-8 py-4 bg-white text-blue-600 font-bold rounded-full transition-all duration-300 hover:bg-blue-100 hover:shadow-lg">Explore Our Services</a>
                </div>
                <div class="md:w-1/2">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-sm border border-white border-opacity-20 transition-all duration-300 hover:bg-opacity-30 hover:shadow-lg">
                            <div class="text-3xl mb-4 bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">🌐</div>
                            <h3 class="text-lg font-semibold mb-2 text-blue-600">Web Development</h3>
                            <p class="text-sm text-black">Crafting stunning, functional websites for your business</p>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-sm border border-white border-opacity-20 transition-all duration-300 hover:bg-opacity-30 hover:shadow-lg">
                            <div class="text-3xl mb-4 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">📱</div>
                            <h3 class="text-lg font-semibold mb-2 text-blue-600">Mobile Apps</h3>
                            <p class="text-sm  text-black">Building seamless user experiences for mobile platforms</p>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-sm border border-white border-opacity-20 transition-all duration-300 hover:bg-opacity-30 hover:shadow-lg">
                            <div class="text-3xl mb-4 bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">🏢</div>
                            <h3 class="text-lg font-semibold mb-2 text-blue-600">Enterprise Solutions</h3>
                            <p class="text-sm text-black">Developing scalable applications for your business needs</p>
                        </div>
                        <div class="bg-white bg-opacity-20 p-6 rounded-xl backdrop-blur-sm border border-white border-opacity-20 transition-all duration-300 hover:bg-opacity-30 hover:shadow-lg">
                            <div class="text-3xl mb-4 bg-pink-500 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">🎨</div>
                            <h3 class="text-lg font-semibold mb-2 text-blue-600">UX/UI Design</h3>
                            <p class="text-sm text-black">Creating intuitive and engaging user interfaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
      </section>
      

        <!-- Header (you can reuse your existing header code here) -->

       
            <section class="py-16 px-6 overflow-hidden">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl font-bold text-center mb-10 ">About CodeWinX IT Solutions</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                        <div class="">
                            <h2 class="text-3xl font-semibold mb-4">Our Story</h2>
                            <p class="text-gray-700 mb-4">
                                Founded in 2023, CodeWinX IT Solutions began as a small startup with a big vision: to revolutionize the way businesses interact with technology. Our journey started with a team of five passionate developers working out of a garage.
                            </p>
                            <p class="text-gray-700">
                                Today, we've grown into a global company with offices india, serving over 100 clients worldwide. Despite our growth, we've never lost sight of our core mission: to deliver innovative, high-quality software solutions that drive business success.
                            </p>
                        </div>
                        <div class="  ">
                            <img src="./corporate-workers-brainstorming-together.jpg" alt="CodeWinX IT Solutions Team" class="rounded-lg shadow-lg">
                        </div>
                    </div>

                    <div class="mb-20 ">
                        <h2 class="text-3xl font-semibold text-center mb-10">Our Values</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up">
                                <h3 class="text-xl font-semibold mb-3">Innovation</h3>
                                <p class="text-gray-700">We constantly push the boundaries of what's possible in software development.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up delay-100">
                                <h3 class="text-xl font-semibold mb-3">Integrity</h3>
                                <p class="text-gray-700">We believe in honest, transparent relationships with our clients and partners.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up delay-200">
                                <h3 class="text-xl font-semibold mb-3">Excellence</h3>
                                <p class="text-gray-700">We strive for excellence in every project we undertake.</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <h2 class="text-3xl font-semibold text-center mb-10">Meet Our Team</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white p-6 rounded-lg shadow-md text-center animate-fade-in-up">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" alt="John Doe" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                                <p class="text-gray-600 mb-2">CEO & Founder</p>
                                <p class="text-gray-700">Visionary leader with 20+ years in tech.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md text-center animate-fade-in-up delay-100">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Jane Smith" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                                <p class="text-gray-600 mb-2">CTO</p>
                                <p class="text-gray-700">Tech guru driving our innovation.</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md text-center animate-fade-in-up delay-200">
                                <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61" alt="Mike Johnson" class="w-32 h-32 rounded-full mx-auto mb-4">
                                <h3 class="text-xl font-semibold mb-2">Mike Johnson</h3>
                                <p class="text-gray-600 mb-2">Lead Developer</p>
                                <p class="text-gray-700">Coding wizard with a passion for clean code.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
      

        <!-- Footer (you can reuse your existing footer code here) -->
  
    <section class="py-16 px-6 overflow-hidden">
        <div class="container mx-auto max-w-4xl space-y-12">
          <div class="text-center">
            <h2 class="text-3xl font-bold animate-fade-in-up">What Our Clients Say</h2>
            <p class="mt-4 text-muted-foreground animate-fade-in-up animation-delay-200">
              Hear from our satisfied clients about their experience working with CodeWinX IT Solutions.
            </p>
          </div>
          <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-background p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-fade-in-up animation-delay-300">
              <blockquote class="space-y-4">
                <p class="text-muted-foreground italic">
                  "CodeWinX IT Solutions has been an invaluable partner in our digital transformation. Their expertise and
                  dedication have been instrumental in the success of our project."
                </p>
                <div class="flex items-center gap-4 mt-6">
                  <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-xl font-bold">
                    JD
                  </div>
                  <div>
                    <p class="font-medium text-lg">Akash Deshpande</p>
                    <p class="text-muted-foreground text-sm">CEO, Akash Corporation</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="bg-background p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-fade-in-up animation-delay-400">
              <blockquote class="space-y-4">
                <p class="text-muted-foreground italic">
                  "Working with CodeWinX IT Solutions has been a game-changer for our business. Their innovative solutions and
                  exceptional customer service have exceeded our expectations."
                </p>
                <div class="flex items-center gap-4 mt-6">
                  <div class="w-16 h-16 rounded-full bg-gradient-to-br from-secondary to-accent flex items-center justify-center text-white text-xl font-bold">
                    JS
                  </div>
                  <div>
                    <p class="font-medium text-lg">Naresh Mehta</p>
                    <p class="text-muted-foreground text-sm">CTO, Globex Inc</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="bg-background p-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-2 animate-fade-in-up animation-delay-500">
              <blockquote class="space-y-4">
                <p class="text-muted-foreground italic">
                  "CodeWinX IT Solutions's team has consistently delivered high-quality solutions that have helped us
                  streamline our operations and drive business growth. We highly recommend their services."
                </p>
                <div class="flex items-center gap-4 mt-6">
                  <div class="w-16 h-16 rounded-full bg-gradient-to-br from-accent to-primary flex items-center justify-center text-white text-xl font-bold">
                    MJ
                  </div>
                  <div>
                    <p class="font-medium text-lg">Mike Johnson</p>
                    <p class="text-muted-foreground text-sm">Hr, Stark Industries</p>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      <div id="footer" class=""></div>

      <script>
          fetch('footer.php')
              .then(response => response.text())
              .then(data => {
                  document.getElementById('footer').innerHTML = data;
              })
              .catch(error => console.error('Error fetching the navbar:', error));
      </script>
     
  </div>
  <script src="script.js"></script>
</body>
</html>