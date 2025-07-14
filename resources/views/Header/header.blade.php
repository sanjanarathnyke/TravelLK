<nav class="relative bg-gradient-to-r from-sri-lanka-blue via-yellow-300 to-green-400 shadow-lg border-b-4 border-yellow-400 sticky top-0 z-50 overflow-hidden">
    <!-- Decorative SVG Pattern -->
    <svg class="absolute inset-0 w-full h-full opacity-10 pointer-events-none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="pattern-gradient" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#1e40af" />
                <stop offset="100%" stop-color="#facc15" />
            </linearGradient>
        </defs>
        <path fill="url(#pattern-gradient)" fill-opacity="0.4" d="M0,160L60,170.7C120,181,240,203,360,197.3C480,192,600,160,720,133.3C840,107,960,85,1080,101.3C1200,117,1320,171,1380,197.3L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-white drop-shadow-lg font-srilanka-logo tracking-wide">
                    Discover Sri Lanka
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-yellow-300 font-semibold transition-colors">Home</a>
                <a href="{{ route('regions') }}"
                    class="text-white hover:text-yellow-300 font-semibold transition-colors">Regions</a>
                <a href="{{ route('aboutus') }}"
                    class="text-white hover:text-yellow-300 font-semibold transition-colors">About</a>
                <a href="{{ route('contactus') }}"
                    class="text-white hover:text-yellow-300 font-semibold transition-colors">Contact</a>
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-white hover:text-yellow-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>