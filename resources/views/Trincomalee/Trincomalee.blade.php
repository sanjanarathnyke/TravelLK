<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trincomalee - Discover Sri Lanka</title>
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
    <section class="relative bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Trincomalee</h1>
                <p class="text-xl mb-6">The Coastal Gem of Eastern Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Beaches</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Temples</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Marine Life</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Top Attractions -->
            <section class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold mb-6 text-gray-900 flex items-center">
                    <span class="text-4xl mr-3">🏛️</span>
                    Top Attractions
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Koneswaram Temple</h3>
                        <p class="text-gray-600">A historic Hindu temple perched on Swami Rock, offering spiritual significance and stunning ocean views.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Nilaveli Beach</h3>
                        <p class="text-gray-600">A pristine beach with golden sands, perfect for swimming, sunbathing, and water sports.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Pigeon Island National Park</h3>
                        <p class="text-gray-600">A marine park ideal for snorkeling and diving, with vibrant coral reefs and diverse marine life.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Fort Frederick</h3>
                        <p class="text-gray-600">A colonial-era fort with historical significance, offering panoramic views of Trincomalee harbor.</p>
                    </div>
                </div>
            </section>

            <!-- Things to Do -->
            <section class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold mb-6 text-gray-900 flex items-center">
                    <span class="text-4xl mr-3">🎭</span>
                    Things to Do
                </h2>
                
                <div class="space-y-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Snorkeling at Pigeon Island</h3>
                        <p class="text-gray-600">Explore vibrant coral reefs and marine life, including colorful fish and turtles.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Whale Watching</h3>
                        <p class="text-gray-600">Join boat tours to spot whales and dolphins in the deep waters off Trincomalee.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Marble Beach</h3>
                        <p class="text-gray-600">Relax at this serene, less crowded beach with crystal-clear waters and soft sands.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Explore Local Markets</h3>
                        <p class="text-gray-600">Shop for fresh seafood, spices, and handicrafts at Trincomalee’s vibrant markets.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Local Foods Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center flex items-center justify-center">
                <span class="text-4xl mr-3">🍛</span>
                Local Food Highlights
            </h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-gradient-to-b from-orange-50 to-orange-100 rounded-lg">
                    <div class="text-4xl mb-4">🦐</div>
                    <h3 class="text-xl font-semibold mb-2">Seafood Platter</h3>
                    <p class="text-gray-600">Freshly caught fish, prawns, and crab, grilled or curried, served at beachside restaurants.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">A coastal version with seafood curries, dhal, and spicy sambols.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Pol Sambol</h3>
                    <p class="text-gray-600">A spicy coconut relish, perfect with rice, hoppers, or seafood.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🍹</div>
                    <h3 class="text-xl font-semibold mb-2">King Coconut Water</h3>
                    <p class="text-gray-600">A refreshing drink from golden coconuts, ideal for the coastal heat.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍮</div>
                    <h3 class="text-xl font-semibold mb-2">Watalappan</h3>
                    <p class="text-gray-600">A creamy coconut custard dessert with jaggery and cardamom.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🥞</div>
                    <h3 class="text-xl font-semibold mb-2">Hoppers (Appa)</h3>
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, served with curry or sambol.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Trincomalee</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and scooters are ideal for short trips. Buses connect Trincomalee to nearby towns.</p>
                    
                    <h3 class="font-semibold mb-2">🏊 Water Safety</h3>
                    <p class="text-gray-200">Check local conditions before swimming or diving, especially during monsoon season.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">May to September is dry and ideal for beach activities and whale watching.</p>
                    
                    <h3 class="font-semibold mb-2">🎪 Festivals</h3>
                    <p class="text-gray-200">Visit during the Koneswaram Festival for vibrant Hindu celebrations and processions.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>