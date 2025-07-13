<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Down South - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Down South</h1>
                <p class="text-xl mb-6">The Tropical Coast of Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Beaches</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Surfing</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Wildlife</span>
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
                        <h3 class="text-xl font-semibold mb-2">Galle Fort</h3>
                        <p class="text-gray-600">A UNESCO World Heritage Site, this 16th-century fort blends Dutch and Portuguese architecture with vibrant cafes and boutiques.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Unawatuna Beach</h3>
                        <p class="text-gray-600">A crescent-shaped beach with golden sands, perfect for swimming, snorkeling, and relaxing by the turquoise waters.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Yala National Park</h3>
                        <p class="text-gray-600">Famous for its leopard population, this park offers thrilling safaris to spot wildlife like elephants, crocodiles, and exotic birds.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Mirissa Beach</h3>
                        <p class="text-gray-600">A laid-back beach known for whale watching, surfing, and stunning sunsets with vibrant beachside cafes.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Whale Watching</h3>
                        <p class="text-gray-600">Join a boat tour from Mirissa to spot blue whales, dolphins, and other marine life in their natural habitat.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Surfing</h3>
                        <p class="text-gray-600">Ride the waves at popular surf spots like Weligama and Hikkaduwa, suitable for beginners and pros alike.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Turtle Hatcheries</h3>
                        <p class="text-gray-600">Visit turtle conservation projects in Bentota or Kosgoda to learn about protecting endangered sea turtles.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Explore Coastal Towns</h3>
                        <p class="text-gray-600">Stroll through charming towns like Hikkaduwa and Tangalle, known for vibrant markets and local culture.</p>
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
                    <p class="text-gray-600">Freshly caught prawns, crab, and fish grilled or curried, served with tropical garnishes.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Ambul Thiyal</h3>
                    <p class="text-gray-600">A tangy fish curry from the south, made with goraka, black pepper, and spices, served with rice.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Pol Sambol</h3>
                    <p class="text-gray-600">Spicy coconut relish, a staple side dish paired with rice, hoppers, or string hoppers.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🍹</div>
                    <h3 class="text-xl font-semibold mb-2">King Coconut Water</h3>
                    <p class="text-gray-600">Refreshing drink straight from the golden king coconuts, perfect for the coastal heat.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍮</div>
                    <h3 class="text-xl font-semibold mb-2">Watalappan</h3>
                    <p class="text-gray-600">A creamy coconut custard dessert spiced with cardamom and jaggery, a southern favorite.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🍤</div>
                    <h3 class="text-xl font-semibold mb-2">Isso Vade</h3>
                    <p class="text-gray-600">Crispy lentil fritters topped with spicy prawns, a popular beachside snack.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Down South</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks, taxis, and buses connect coastal towns. Renting a scooter is popular for short distances.</p>
                    
                    <h3 class="font-semibold mb-2">🏊 Beach Safety</h3>
                    <p class="text-gray-200">Check for lifeguard flags and avoid swimming during rough seas or monsoon season.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌴 Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">November to April offers sunny weather and calm seas, ideal for beach activities and whale watching.</p>
                    
                    <h3 class="font-semibold mb-2">🐢 Wildlife Etiquette</h3>
                    <p class="text-gray-200">Respect wildlife during safaris and turtle hatchery visits; avoid touching animals or littering.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>