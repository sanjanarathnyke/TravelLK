<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Sri Lanka - Your Ultimate Travel Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sri-lanka-blue': '#003366',
                        'sri-lanka-gold': '#FFD700',
                        'tropical-green': '#228B22'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    @include('Header.header')

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white">
        <div class="absolute inset-0 bg-black opacity-40 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('{{ asset('assets/images/stock-images/lkone-world.jpg') }}')"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 z-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Discover the Pearl of the Indian Ocean
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Explore Sri Lanka's breathtaking landscapes, rich culture, and unforgettable experiences across diverse regions
                </p>
                <a href="regions.html" class="inline-block bg-sri-lanka-gold text-sri-lanka-blue px-8 py-4 rounded-lg text-lg font-semibold hover:bg-yellow-400 transition-colors shadow-lg">
                    Explore Sri Lanka
                </a>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-16 bg-white relative">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/stock-images/landscape.jpg') }}');"></div>
        <div class="absolute inset-0 bg-white opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Welcome to Sri Lanka</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From ancient temples and colonial architecture to pristine beaches and lush tea plantations, 
                    Sri Lanka offers an incredible diversity of experiences in a compact island nation.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="text-4xl mb-4">🏛️</div>
                    <h3 class="text-xl font-semibold mb-2">Rich Heritage</h3>
                    <p class="text-gray-600">Explore ancient kingdoms, UNESCO World Heritage sites, and centuries-old temples</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="text-4xl mb-4">🏖️</div>
                    <h3 class="text-xl font-semibold mb-2">Stunning Beaches</h3>
                    <p class="text-gray-600">Relax on golden sandy beaches and enjoy world-class surfing and diving</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg shadow-md">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Delicious Cuisine</h3>
                    <p class="text-gray-600">Savor authentic Sri Lankan flavors with fresh spices and local specialties</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Regions -->
    <section class="py-16 bg-gray-50 relative">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/stock-images/map.jpg') }}');"></div>
        <div class="absolute inset-0 bg-white opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Destinations</h2>
                <p class="text-lg text-gray-600">Discover the most popular regions across the island</p>
            </div>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 md:gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('assets/images/kandy/pexels-eugene-dorosh-230277-739409.jpg') }}" alt="Kandy" class="w-full h-40 sm:h-48 md:h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Kandy</h3>
                        <p class="text-gray-600 mb-4">The cultural capital with the sacred Temple of the Tooth</p>
                        <a href="{{ route('kandy') }}" class="text-sri-lanka-blue font-semibold hover:underline text-base md:text-lg">Explore Kandy →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('assets/images/down-south/pexels-freestockpro-319948.jpg') }}" alt="Down South" class="w-full h-40 sm:h-48 md:h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Down South</h3>
                        <p class="text-gray-600 mb-4">Historic Galle Fort and pristine southern beaches</p>
                        <a href="{{ route('down-south') }}" class="text-sri-lanka-blue font-semibold hover:underline text-base md:text-lg">Explore South →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('assets/images/ella/pexels-freestockpro-321569.jpg') }}" alt="Ella" class="w-full h-40 sm:h-48 md:h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Ella</h3>
                        <p class="text-gray-600 mb-4">Scenic hill country with the famous Nine Arches Bridge</p>
                        <a href="{{ route('ella') }}" class="text-sri-lanka-blue font-semibold hover:underline text-base md:text-lg">Explore Ella →</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('regions') }}" class="inline-block bg-sri-lanka-blue text-white px-4 py-2 md:px-8 md:py-3 rounded-lg font-semibold hover:bg-blue-800 transition-colors text-base md:text-lg">
                    View All Regions
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('Footer.footer')
    
</body>
</html>