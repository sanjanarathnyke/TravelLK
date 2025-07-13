<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ella - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Ella</h1>
                <p class="text-xl mb-6">The Scenic Hill Retreat of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Hiking</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Tea Plantations</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Scenic Views</span>
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
                        <h3 class="text-xl font-semibold mb-2">Nine Arch Bridge</h3>
                        <p class="text-gray-600">An iconic colonial-era railway bridge surrounded by lush greenery, perfect for photography and scenic walks.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Little Adam’s Peak</h3>
                        <p class="text-gray-600">A short hike offering stunning panoramic views of the Ella Gap and rolling hills.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Ella Rock</h3>
                        <p class="text-gray-600">A challenging trek through tea plantations and forests, rewarding with breathtaking vistas.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Ravana Falls</h3>
                        <p class="text-gray-600">A picturesque waterfall ideal for a refreshing dip and enjoying the natural beauty.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Tea Plantation Tours</h3>
                        <p class="text-gray-600">Visit tea factories like Uva Halpewatte to learn about Ceylon tea production and enjoy tastings.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Scenic Train Ride</h3>
                        <p class="text-gray-600">Take the iconic train journey from Ella to Kandy or Nuwara Eliya through misty hills and tea estates.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Hiking and Trekking</h3>
                        <p class="text-gray-600">Explore trails to Ella Rock, Little Adam’s Peak, or nearby waterfalls for adventure and views.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Relax at Cafes</h3>
                        <p class="text-gray-600">Unwind at cozy cafes like Chill Cafe, enjoying local food and stunning hill views.</p>
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
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, perfect with curry or sambol.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">Hill country-style curry with local vegetables, coconut milk, and aromatic spices.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍰</div>
                    <h3 class="text-xl font-semibold mb-2">Kavum</h3>
                    <p class="text-gray-600">Sweet oil cakes enjoyed during festivals, perfect with a cup of Ceylon tea.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Wood Apple Juice</h3>
                    <p class="text-gray-600">A refreshing sweet-sour drink, ideal for the cool hill climate.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍵</div>
                    <h3 class="text-xl font-semibold mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600">High-grown tea from nearby estates, best enjoyed fresh with scenic views.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍜</div>
                    <h3 class="text-xl font-semibold mb-2">Kiribath</h3>
                    <p class="text-gray-600">Coconut milk rice served with spicy lunu miris, a traditional festive dish.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Ella</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks are ideal for short trips. Walking is great for exploring Ella town and nearby trails.</p>
                    
                    <h3 class="font-semibold mb-2">🥾 Hiking Safety</h3>
                    <p class="text-gray-200">Wear sturdy shoes for treks and bring water. Follow marked trails to avoid getting lost.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">December to March offers clear skies for hiking. April to August is lush but rainy.</p>
                    
                    <h3 class="font-semibold mb-2">🚂 Train Tips</h3>
                    <p class="text-gray-200">Book train tickets in advance for the scenic Ella-Kandy route, especially during peak season.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>