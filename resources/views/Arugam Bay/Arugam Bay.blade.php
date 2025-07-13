<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arugam Bay - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Arugam Bay</h1>
                <p class="text-xl mb-6">The Surfing Paradise of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Surfing</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Beaches</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Laid-back Vibes</span>
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
                        <h3 class="text-xl font-semibold mb-2">Arugam Bay Beach</h3>
                        <p class="text-gray-600">World-renowned for its consistent waves, ideal for surfing, and vibrant beach culture.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Kudumbigala Monastery</h3>
                        <p class="text-gray-600">An ancient rock monastery in a forested area, offering spiritual retreats and panoramic views.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Lahugala National Park</h3>
                        <p class="text-gray-600">A serene park known for its elephant herds, birdlife, and tranquil lakes, perfect for safaris.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Pottuvil Lagoon</h3>
                        <p class="text-gray-600">A scenic lagoon ideal for kayaking, birdwatching, and experiencing local fishing culture.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Surfing</h3>
                        <p class="text-gray-600">Ride world-class waves at Main Point, Whiskey Point, or Peanut Farm, suitable for all skill levels.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Yoga and Wellness</h3>
                        <p class="text-gray-600">Join yoga retreats or meditation sessions at beachfront resorts for relaxation and rejuvenation.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Wildlife Safaris</h3>
                        <p class="text-gray-600">Explore nearby national parks like Lahugala or Kumana to spot elephants and exotic birds.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Beach Parties</h3>
                        <p class="text-gray-600">Enjoy vibrant beach parties and live music at local bars during the surfing season.</p>
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
                    <p class="text-gray-600">Freshly caught fish, prawns, and crab, grilled or curried, served at beachside shacks.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">A coastal twist on rice and curry with fresh seafood and spicy sambols.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Pol Sambol</h3>
                    <p class="text-gray-600">A spicy coconut relish, perfect with rice, hoppers, or fresh seafood.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🍹</div>
                    <h3 class="text-xl font-semibold mb-2">King Coconut Water</h3>
                    <p class="text-gray-600">Refreshing drink from golden coconuts, ideal for staying hydrated in the coastal heat.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍮</div>
                    <h3 class="text-xl font-semibold mb-2">Watalappan</h3>
                    <p class="text-gray-600">A creamy coconut custard dessert with jaggery and cardamom, a local favorite.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🥞</div>
                    <h3 class="text-xl font-semibold mb-2">Hoppers (Appa)</h3>
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, often served with curry or sambol.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Arugam Bay</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and scooters are ideal for short trips. Buses connect Arugam Bay to nearby towns.</p>
                    
                    <h3 class="font-semibold mb-2">🏄 Surf Safety</h3>
                    <p class="text-gray-600">Check local conditions and use surf schools for beginners. Avoid surfing during rough seas.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">May to October is peak surfing season with consistent waves and sunny weather.</p>
                    
                    <h3 class="font-semibold mb-2">🎉 Surf Festivals</h3>
                    <p class="text-gray-200">Join international surf competitions in July/August for a lively beach atmosphere.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>