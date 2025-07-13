<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="index.html" class="text-2xl font-bold text-sri-lanka-blue font-srilanka-logo">
                    Discover Sri Lanka
                </a>

            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-sri-lanka-blue transition-colors">Home</a>
                <a href="{{ route('regions') }}"
                    class="text-gray-700 hover:text-sri-lanka-blue transition-colors">Regions</a>
                <a href="{{ route('aboutus') }}"
                    class="text-gray-700 hover:text-sri-lanka-blue transition-colors">About</a>
                <a href="{{ route('contactus') }}"
                    class="text-gray-700 hover:text-sri-lanka-blue transition-colors">Contact</a>
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>