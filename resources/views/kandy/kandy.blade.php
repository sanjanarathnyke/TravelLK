<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kandy - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Kandy</h1>
                <p class="text-xl mb-6">The Cultural Capital of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Cultural Heritage</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Hill Country</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Sacred Sites</span>
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
                        <h3 class="text-xl font-semibold mb-2">Temple of the Sacred Tooth Relic</h3>
                        <p class="text-gray-600">The most sacred Buddhist temple in Sri Lanka, housing a tooth relic of Buddha. Experience the daily rituals and evening ceremonies with traditional drumming.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Royal Botanical Gardens, Peradeniya</h3>
                        <p class="text-gray-600">147-acre botanical garden featuring over 4,000 species of plants, including a magnificent orchid house and giant bamboo collection.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Kandy Lake</h3>
                        <p class="text-gray-600">Artificial lake in the heart of the city, perfect for peaceful walks with views of the temple and surrounding hills.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Udawattakele Forest Reserve</h3>
                        <p class="text-gray-600">Historic forest sanctuary above the temple, offering nature trails and panoramic views of Kandy city.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Watch Kandyan Dance Performance</h3>
                        <p class="text-gray-600">Experience traditional Sri Lankan cultural dance with elaborate costumes, fire dancing, and drumming performances.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Tea Factories</h3>
                        <p class="text-gray-600">Tour nearby tea plantations and factories to learn about Ceylon tea production and enjoy fresh tea tastings.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Explore Local Markets</h3>
                        <p class="text-gray-600">Browse Kandy Market for fresh produce, spices, handicrafts, and traditional Sri Lankan items.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Hiking & Nature Walks</h3>
                        <p class="text-gray-600">Trek through surrounding hills, visit Hanthana Mountain Range, or take peaceful walks in the forest reserve.</p>
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
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, perfect for breakfast with curry or coconut sambol.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Kandyan Rice & Curry</h3>
                    <p class="text-gray-600">Traditional hill country curry with local vegetables, coconut milk, and aromatic spices served with red rice.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍰</div>
                    <h3 class="text-xl font-semibold mb-2">Kavum & Kokis</h3>
                    <p class="text-gray-600">Traditional sweet treats made during festivals - oil cakes and crispy coconut cookies perfect with Ceylon tea.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Wood Apple Juice</h3>
                    <p class="text-gray-600">Refreshing local fruit drink with a unique sweet-sour taste, perfect for the hill country climate.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍵</div>
                    <h3 class="text-xl font-semibold mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600">World-famous high-grown Ceylon tea from nearby plantations, best enjoyed fresh from the source.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍜</div>
                    <h3 class="text-xl font-semibold mb-2">Kiribath</h3>
                    <p class="text-gray-600">Coconut milk rice traditionally served during special occasions, often accompanied by lunu miris (chili paste).</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Kandy</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and buses are readily available. Walking is pleasant in the city center around the lake and temple area.</p>
                    
                    <h3 class="font-semibold mb-2">👕 Dress Code</h3>
                    <p class="text-gray-200">Modest clothing required for temple visits. Cover shoulders and knees, remove shoes before entering.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">Year-round destination. December to April is drier, while May to September can be rainy but lush and green.</p>
                    
                    <h3 class="font-semibold mb-2">🎪 Festivals</h3>
                    <p class="text-gray-200">Visit during Esala Perahera (July/August) for the spectacular temple procession with elephants and dancers.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>