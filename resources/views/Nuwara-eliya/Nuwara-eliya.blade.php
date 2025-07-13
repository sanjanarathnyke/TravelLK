<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuwara Eliya - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nuwara Eliya</h1>
                <p class="text-xl mb-6">The Little England of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Tea Plantations</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Colonial Charm</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Cool Climate</span>
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
                        <h3 class="text-xl font-semibold mb-2">Horton Plains National Park</h3>
                        <p class="text-gray-600">A stunning highland park with World’s End cliff, Baker’s Falls, and diverse wildlife.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Gregory Lake</h3>
                        <p class="text-gray-600">A serene lake offering boating, picnics, and scenic views amidst misty hills.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Pedro Tea Estate</h3>
                        <p class="text-gray-600">A working tea plantation with guided tours showcasing Ceylon tea production.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Victoria Park</h3>
                        <p class="text-gray-600">A beautifully maintained park with colorful flowers, ideal for leisurely strolls.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Tea Factory Tours</h3>
                        <p class="text-gray-600">Visit estates like Pedro or Blue Field to learn about tea production and enjoy tastings.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Hiking in Horton Plains</h3>
                        <p class="text-gray-600">Trek to World’s End and Baker’s Falls for breathtaking views and nature.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Explore Colonial Buildings</h3>
                        <p class="text-gray-600">Admire British-era architecture at the Post Office, Grand Hotel, and Hill Club.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Horse Racing</h3>
                        <p class="text-gray-600">Attend races at the Nuwara Eliya Racecourse during the April festival season.</p>
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
                    <p class="text-gray-600">Bowl-shaped pancakes, perfect for breakfast with curry or coconut sambol.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">Hill country curry with fresh vegetables, coconut milk, and aromatic spices.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍰</div>
                    <h3 class="text-xl font-semibold mb-2">Kavum</h3>
                    <p class="text-gray-600">Sweet oil cakes, a festive treat enjoyed with Ceylon tea.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Wood Apple Juice</h3>
                    <p class="text-gray-600">A sweet-sour drink, refreshing in the cool hill climate.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍵</div>
                    <h3 class="text-xl font-semibold mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600">High-grown tea from local estates, best enjoyed fresh with scenic views.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍜</div>
                    <h3 class="text-xl font-semibold mb-2">Kiribath</h3>
                    <p class="text-gray-600">Coconut milk rice, often served with spicy lunu miris during celebrations.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Nuwara Eliya</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and taxis are convenient. Walking is pleasant in the town center.</p>
                    
                    <h3 class="font-semibold mb-2">🧥 What to Pack</h3>
                    <p class="text-gray-200">Bring warm clothing as temperatures can drop, especially at night.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">April is vibrant with festivals, while January to March offers clear, cool weather.</p>
                    
                    <h3 class="font-semibold mb-2">🎉 Festivals</h3>
                    <p class="text-gray-200">Visit during the April Sinhala-Tamil New Year for horse races and cultural events.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>