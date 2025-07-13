<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuradhapura - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Anuradhapura</h1>
                <p class="text-xl mb-6">The Ancient Capital of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Ancient Ruins</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Sacred Sites</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">History</span>
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
                        <h3 class="text-xl font-semibold mb-2">Sri Maha Bodhi</h3>
                        <p class="text-gray-600">A sacred fig tree, believed to be the oldest documented tree in the world, grown from a cutting of the Bodhi tree under which Buddha attained enlightenment.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Ruwanwelisaya Stupa</h3>
                        <p class="text-gray-600">A magnificent ancient stupa, one of the tallest in the world, revered as a key Buddhist pilgrimage site.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Jetavanaramaya Stupa</h3>
                        <p class="text-gray-600">One of the largest brick structures in the world, showcasing ancient Sri Lankan engineering and Buddhist heritage.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Abhayagiri Monastery</h3>
                        <p class="text-gray-600">A vast monastic complex with ancient ruins, including a stupa, moonstones, and intricate stone carvings.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Explore Ancient Ruins</h3>
                        <p class="text-gray-600">Cycle or walk through the sacred city to discover ancient palaces, monasteries, and reservoirs.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Mihintale</h3>
                        <p class="text-gray-600">Climb the 1,840 steps to this hilltop, the cradle of Buddhism in Sri Lanka, for spiritual and scenic views.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Join Buddhist Rituals</h3>
                        <p class="text-gray-600">Participate in or observe traditional Buddhist ceremonies at sacred sites like Sri Maha Bodhi.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Archaeological Museum</h3>
                        <p class="text-gray-600">Explore artifacts, sculptures, and relics that reveal Anuradhapura’s ancient history.</p>
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
                    <div class="text-4xl mb-4">🥞</div>
                    <h3 class="text-xl font-semibold mb-2">Hoppers (Appa)</h3>
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, perfect for breakfast with curry or sambol.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">A traditional meal with rice, dhal, vegetable curries, and spicy sambols, reflecting local flavors.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍰</div>
                    <h3 class="text-xl font-semibold mb-2">Kavum</h3>
                    <p class="text-gray-600">Traditional oil cakes made during festivals, enjoyed with a cup of Ceylon tea.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Wood Apple Juice</h3>
                    <p class="text-gray-600">A refreshing sweet-sour drink made from local wood apples, ideal for hot days.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍵</div>
                    <h3 class="text-xl font-semibold mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600">Locally sourced tea, perfect for enjoying the region’s world-famous brew.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍜</div>
                    <h3 class="text-xl font-semibold mb-2">Kiribath</h3>
                    <p class="text-gray-600">Coconut milk rice served during special occasions, often paired with spicy lunu miris.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Anuradhapura</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Rent a bicycle or tuk-tuk to explore the sprawling ancient city. Guided tours are also available.</p>
                    
                    <h3 class="font-semibold mb-2">👕 Dress Code</h3>
                    <p class="text-gray-200">Wear modest clothing for sacred sites, covering shoulders and knees. Remove shoes at temples.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">May to September is ideal for dry weather. Avoid intense heat in March and April.</p>
                    
                    <h3 class="font-semibold mb-2">🎪 Festivals</h3>
                    <p class="text-gray-200">Visit during Poson Poya (June) for vibrant Buddhist celebrations and illuminated stupas.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>