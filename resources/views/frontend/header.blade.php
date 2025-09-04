 <script src="https://cdn.tailwindcss.com"></script>

<nav class="bg-gray-900 fixed w-full z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/"
                    class="text-2xl font-bold text-white hover:text-[#ff0000] transition-all animate-pulse-glow">MineHive</a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/"
                    class="hover:text-[#ff0000] {{ request()->is('/') ? 'text-[#ff0000]' : 'text-white' }}">Home</a>
                <a href="{{ route('about-page') }}"
                    class="hover:text-[#ff0000] {{ request()->routeIs('about-page') ? 'text-[#ff0000]' : 'text-white' }}">About</a>

                <!-- Services with Dropdown -->
                <div class="group relative">
                    <a href="{{ route('services') }}"
                        class="flex items-center hover:text-[#ff0000] {{ request()->routeIs('services') ? 'text-[#ff0000]' : 'text-white' }}">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <!-- Dropdown -->
                    <div
                        class="absolute hidden group-hover:flex flex-col bg-gray-800 text-white mt-2 rounded-md w-64 shadow-lg z-50">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">Google Marketing</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">YouTube Marketing</a>

                        <!-- Social Media -->
                        <div class="relative group">
                            <div
                                class="px-4 py-2 hover:bg-gray-700 flex justify-between items-center cursor-pointer">
                                <span class="group-hover:text-[#ff0000]">Social Media</span>
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>

                            <!-- Nested Submenu -->
                            <div
                                class="absolute top-0 left-full ml-1 hidden group-hover:flex flex-col bg-gray-800 rounded-md w-64 shadow-lg z-50">
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">Facebook</a>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">Instagram</a>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">TikTok</a>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">Telegram</a>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-700 hover:text-[#ff0000]">WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('portfolio') }}"
                    class="hover:text-[#ff0000] {{ request()->routeIs('portfolio') ? 'text-[#ff0000]' : 'text-white' }}">Portfolio</a>
                <a href="{{ route('contact-page') }}"
                    class="hover:text-[#ff0000] {{ request()->routeIs('contact-page') ? 'text-[#ff0000]' : 'text-white' }}">Contact</a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden">
                <button id="mobile-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-900 w-full px-4 py-4 space-y-2">
        <a href="/"
            class="block hover:text-[#ff0000] {{ request()->is('/') ? 'text-[#ff0000]' : 'text-white' }}">Home</a>
        <a href="{{ route('about-page') }}"
            class="block hover:text-[#ff0000] {{ request()->routeIs('about-page') ? 'text-[#ff0000]' : 'text-white' }}">About</a>

        <!-- Services Mobile -->
        <div>
            <button class="mobile-dropdown-btn w-full text-left text-white flex justify-between items-center hover:text-[#ff0000]">
                Services
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="mobile-dropdown hidden pl-4 mt-2 space-y-1">
                <a href="#" class="block text-white hover:text-[#ff0000]">Google Marketing</a>
                <a href="#" class="block text-white hover:text-[#ff0000]">YouTube Marketing</a>

                <!-- Social Media Mobile -->
                <div>
                    <button class="mobile-subdropdown-btn w-full text-left text-white flex justify-between items-center hover:text-[#ff0000]">
                        Social Media
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="mobile-subdropdown hidden pl-4 mt-2 space-y-1">
                        <a href="#" class="block text-white hover:text-[#ff0000]">Facebook</a>
                        <a href="#" class="block text-white hover:text-[#ff0000]">Instagram</a>
                        <a href="#" class="block text-white hover:text-[#ff0000]">TikTok</a>
                        <a href="#" class="block text-white hover:text-[#ff0000]">Telegram</a>
                        <a href="#" class="block text-white hover:text-[#ff0000]">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('portfolio') }}"
            class="block hover:text-[#ff0000] {{ request()->routeIs('portfolio') ? 'text-[#ff0000]' : 'text-white' }}">Portfolio</a>
        <a href="{{ route('contact-page') }}"
            class="block hover:text-[#ff0000] {{ request()->routeIs('contact-page') ? 'text-[#ff0000]' : 'text-white' }}">Contact</a>
    </div>
</nav>

<!-- Logo Glow Animation -->
<style>
@keyframes glowPulse {
    0% { text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000; }
    50% { text-shadow: 0 0 10px #ff4500, 0 0 20px #ff4500, 0 0 30px #ff6347; }
    100% { text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000; }
}
.animate-pulse-glow { animation: glowPulse 2s infinite; }
</style>

<!-- JS for mobile dropdowns -->
<script>
const toggleBtn = document.getElementById('mobile-toggle');
const mobileMenu = document.getElementById('mobile-menu');
toggleBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));

// Mobile nested dropdowns
document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const dropdown = btn.nextElementSibling;
        dropdown.classList.toggle('hidden');
    });
});
document.querySelectorAll('.mobile-subdropdown-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const subdropdown = btn.nextElementSibling;
        subdropdown.classList.toggle('hidden');
    });
});
</script>
