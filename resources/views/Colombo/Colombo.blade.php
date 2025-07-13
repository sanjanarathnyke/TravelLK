<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombo - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Colombo</h1>
                <p class="text-xl mb-6">The Vibrant Capital of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Urban Culture</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Shopping</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Nightlife</span>
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
                        <h3 class="text-xl font-semibold mb-2">Gangaramaya Temple</h3>
                        <p class="text-gray-600">A historic Buddhist temple with a museum, library, and stunning architecture, blending tradition with modernity.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Galle Face Green</h3>
                        <p class="text-gray-600">A popular oceanfront promenade perfect for evening strolls, street food, and vibrant sunsets.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">National Museum of Colombo</h3>
                        <p class="text-gray-600">Explore Sri Lanka’s rich history with artifacts from ancient kingdoms, colonial eras, and cultural heritage.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Viharamahadevi Park</h3>
                        <p class="text-gray-600">A lush urban park ideal for relaxation, with walking paths, gardens, and a golden Buddha statue.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Shop at Pettah Market</h3>
                        <p class="text-gray-600">Dive into the bustling streets of Pettah for spices, textiles, jewelry, and local street food.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Explore Colonial Architecture</h3>
                        <p class="text-gray-600">Visit landmarks like the Old Parliament Building and Independence Square for a glimpse of colonial history.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Enjoy Nightlife</h3>
                        <p class="text-gray-600">Experience Colombo’s vibrant nightlife at rooftop bars, clubs, and live music venues.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Take a Food Tour</h3>
                        <p class="text-gray-600">Savor a mix of Sri Lankan, Indian, and international cuisines at Colombo’s diverse restaurants.</p>
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
                    <div class="text-4xl mb-4">🥟</div>
                    <h3 class="text-xl font-semibold mb-2">Kottu Roti</h3>
                    <p class="text-gray-600">A popular street food of chopped roti mixed with vegetables, meat, and spices, stir-fried on a hot griddle.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">A staple meal with rice and an array of curries, including dhal, fish, and spicy sambols.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍤</div>
                    <h3 class="text-xl font-semibold mb-2">Devilled Prawns</h3>
                    <p class="text-gray-600">Spicy stir-fried prawns with a tangy sauce, a favorite at local eateries.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">King Coconut Water</h3>
                    <p class="text-gray-600">Fresh, hydrating drink from golden coconuts, widely available at street stalls.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍮</div>
                    <h3 class="text-xl font-semibold mb-2">Watalappan</h3>
                    <p class="text-gray-600">A rich coconut custard dessert flavored with jaggery and cardamom.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🥞</div>
                    <h3 class="text-xl font-semibold mb-2">Hoppers (Appa)</h3>
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, often served with egg or curry.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Colombo</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks, taxis, and ride-hailing apps are convenient. Buses are affordable but can be crowded.</p>
                    
                    <h3 class="font-semibold mb-2">🛍️ Shopping Tips</h3>
                    <p class="text-gray-200">Bargain at markets like Pettah, but malls like Odel offer fixed-price luxury goods.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">January to March is ideal for pleasant weather. Avoid heavy monsoon rains from May to September.</p>
                    
                    <h3 class="font-semibold mb-2">🎉 Events</h3>
                    <p class="text-gray-200">Experience the Colombo Art Biennale or local food festivals for a taste of urban culture.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>