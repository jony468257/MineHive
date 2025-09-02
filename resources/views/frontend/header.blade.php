 <script src="https://cdn.tailwindcss.com"></script>

 <nav class="fixed w-full z-50 bg-gray-900 shadow-sm">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="flex justify-between h-16 items-center">

             <!-- Logo -->
             <div class="flex-shrink-0">
                 <a href="/"
                     class="relative text-2xl font-bold text-white px-3 py-1 rounded transform transition duration-500 hover:scale-110 hover:text-red-500 animate-pulse-glow">
                     MineHive
                 </a>
             </div>

             <style>
                 @keyframes glowPulse {
                     0% {
                         text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000;
                     }

                     50% {
                         text-shadow: 0 0 10px #ff4500, 0 0 20px #ff4500, 0 0 30px #ff6347;
                     }

                     100% {
                         text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000;
                     }
                 }

                 .animate-pulse-glow {
                     animation: glowPulse 2s infinite;
                 }
             </style>


             <!-- Desktop Menu -->
             <div class="hidden md:flex md:space-x-8">
                 <a href="/"
                     class="px-3 py-2 rounded-md font-medium {{ request()->is('/') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Home</a>
                 <a href="{{ route('about-page') }}"
                     class="px-3 py-2 rounded-md font-medium {{ request()->routeIs('about-page') ? 'text-red-500' : 'text-white' }} hover:text-red-500">About</a>
                 <a href="{{ route('services') }}"
                     class="px-3 py-2 rounded-md font-medium {{ request()->routeIs('services') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Services</a>
                 <a href="{{ route('portfolio') }}"
                     class="px-3 py-2 rounded-md font-medium {{ request()->routeIs('portfolio') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Portfolio</a>
                 <a href="{{ route('contact-page') }}"
                     class="px-3 py-2 rounded-md font-medium {{ request()->routeIs('contact-page') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Contact</a>
             </div>

             <!-- Mobile Hamburger -->
             <div class="md:hidden">
                 <button id="menu-btn" class="text-white focus:outline-none">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                 </button>
             </div>

         </div>
     </div>

     <!-- Mobile Menu (Slide-in Right) -->
     <div class="md:hidden fixed top-0 right-[-300px] h-full w-64 bg-gray-900 transition-all duration-300 z-50"
         id="mobile-menu">
         <div class="flex justify-end p-4">
             <button id="close-menu" class="text-white text-2xl">&times;</button>
         </div>
         <a href="/"
             class="block px-4 py-3 {{ request()->is('/') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Home</a>
         <a href="{{ route('about-page') }}"
             class="block px-4 py-3 {{ request()->routeIs('about-page') ? 'text-red-500' : 'text-white' }} hover:text-red-500">About</a>
         <a href="{{ route('services') }}"
             class="block px-4 py-3 {{ request()->routeIs('services') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Services</a>
         <a href="{{ route('portfolio') }}"
             class="block px-4 py-3 {{ request()->routeIs('portfolio') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Portfolio</a>
         <a href="{{ route('contact-page') }}"
             class="block px-4 py-3 {{ request()->routeIs('contact-page') ? 'text-red-500' : 'text-white' }} hover:text-red-500">Contact</a>
     </div>
 </nav>

 <script>
     const menuBtn = document.getElementById('menu-btn');
     const mobileMenu = document.getElementById('mobile-menu');
     const closeMenuBtn = document.getElementById('close-menu');

     // Open Mobile Menu
     menuBtn.addEventListener('click', () => {
         mobileMenu.style.right = '0';
     });

     // Close Mobile Menu
     closeMenuBtn.addEventListener('click', () => {
         mobileMenu.style.right = '-300px';
     });
 </script>
