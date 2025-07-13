<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigiriya - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Sigiriya</h1>
                <p class="text-xl mb-6">The Lion Rock Fortress of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Ancient Fortress</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Frescoes</span>
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
                        <h3 class="text-xl font-semibold mb-2">Sigiriya Rock Fortress</h3>
                        <p class="text-gray-600">A UNESCO World Heritage Site, this 5th-century rock fortress features ancient frescoes, a lion’s paw entrance, and panoramic views.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Pidurangala Rock</h3>
                        <p class="text-gray-600">A nearby rock offering a challenging climb and stunning views of Sigiriya and the surrounding plains.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Dambulla Cave Temple</h3>
                        <p class="text-gray-600">A nearby cave complex with ancient Buddhist statues and vibrant frescoes, a UNESCO site.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Minneriya National Park</h3>
                        <p class="text-gray-600">Famous for the annual elephant gathering, offering safaris to see wildlife in their natural habitat.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Climb Sigiriya Rock</h3>
                        <p class="text-gray-600">Ascend the ancient fortress to explore its ruins, frescoes, and breathtaking summit views.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Safari in Minneriya</h3>
                        <p class="text-gray-600">Join a jeep safari to witness the famous elephant gathering and spot other wildlife.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Dambulla Caves</h3>
                        <p class="text-gray-600">Explore the ancient Buddhist cave temples with intricate paintings and statues.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Cycle Through Villages</h3>
                        <p class="text-gray-600">Rent a bike to explore rural villages, rice paddies, and local life around Sigiriya.</p>
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
                    <p class="text-gray-600">Bowl-shaped pancakes made from fermented rice flour, served with curry or sambol.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Rice & Curry</h3>
                    <p class="text-gray-600">A traditional meal with rice, dhal, vegetable curries, and spicy sambols.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🍰</div>
                    <h3 class="text-xl font-semibold mb-2">Kavum</h3>
                    <p class="text-gray-600">Sweet oil cakes, a festive treat enjoyed with Ceylon tea.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Wood Apple Juice</h3>
                    <p class="text-gray-600">A refreshing sweet-sour drink, perfect for the warm climate.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍵</div>
                    <h3 class="text-xl font-semibold mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600">Locally sourced tea, ideal for enjoying with scenic views.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍜</div>
                    <h3 class="text-xl font-semibold mb-2">Kiribath</h3>
                    <p class="text-gray-600">Coconut milk rice served with spicy lunu miris, a traditional dish.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Sigiriya</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and bicycles are ideal for exploring Sigiriya and nearby sites.</p>
                    
                    <h3 class="font-semibold mb-2">🥾 Climbing Tips</h3>
                    <p class="text-gray-200">Start early to avoid heat and crowds when climbing Sigiriya or Pidurangala.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">January to March is dry and pleasant. Avoid heavy rains from October to December.</p>
                    
                    <h3 class="font-semibold mb-2">🎫 Tickets</h3>
                    <p class="text-gray-200">Purchase Sigiriya entry tickets early, as they can be expensive for foreigners.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>