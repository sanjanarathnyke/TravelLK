<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaffna - Discover Sri Lanka</title>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Jaffna</h1>
                <p class="text-xl mb-6">The Cultural Heart of Northern Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Tamil Culture</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Historical Sites</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded">Islands</span>
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
                        <h3 class="text-xl font-semibold mb-2">Nallur Kandaswamy Temple</h3>
                        <p class="text-gray-600">A vibrant Hindu temple known for its grand festivals and intricate Dravidian architecture.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Jaffna Fort</h3>
                        <p class="text-gray-600">A historic Dutch fort with massive ramparts, offering insights into colonial and wartime history.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Delft Island</h3>
                        <p class="text-gray-600">A remote island with wild ponies, colonial ruins, and a unique baobab tree, accessible by ferry.</p>
                    </div>
                    
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">Keerimalai Springs</h3>
                        <p class="text-gray-600">Sacred hot springs with healing properties, popular among pilgrims and visitors.</p>
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
                        <h3 class="text-lg font-semibold mb-2">Explore Jaffna Market</h3>
                        <p class="text-gray-600">Shop for local produce, spices, and traditional Tamil handicrafts in this bustling market.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Visit Nagadeepa Temple</h3>
                        <p class="text-gray-600">Take a ferry to this sacred Buddhist temple on Nainativu Island, a key pilgrimage site.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Enjoy Jaffna’s Beaches</h3>
                        <p class="text-gray-600">Relax at Casuarina Beach or Charty Beach for serene coastal vibes and water activities.</p>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Discover Local History</h3>
                        <p class="text-gray-600">Visit the Jaffna Public Library and Archaeological Museum to learn about the region’s heritage.</p>
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
                    <h3 class="text-xl font-semibold mb-2">Jaffna Crab Curry</h3>
                    <p class="text-gray-600">A spicy, tangy curry made with fresh lagoon crabs, a signature dish of the region.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-lg">
                    <div class="text-4xl mb-4">🍛</div>
                    <h3 class="text-xl font-semibold mb-2">Pittu with Sambar</h3>
                    <p class="text-gray-600">Steamed rice flour and coconut cylinders served with spicy lentil sambar.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-yellow-50 to-yellow-100 rounded-lg">
                    <div class="text-4xl mb-4">🥞</div>
                    <h3 class="text-xl font-semibold mb-2">Dosa</h3>
                    <p class="text-gray-600">Crispy rice and lentil pancakes, often served with chutneys and sambar.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-lg">
                    <div class="text-4xl mb-4">🍹</div>
                    <h3 class="text-xl font-semibold mb-2">Palmyrah Toddy</h3>
                    <p class="text-gray-600">A traditional fermented drink from palmyrah palm, mildly alcoholic and unique to Jaffna.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-red-50 to-red-100 rounded-lg">
                    <div class="text-4xl mb-4">🍮</div>
                    <h3 class="text-xl font-semibold mb-2">Payasam</h3>
                    <p class="text-gray-600">A sweet rice pudding with jaggery, coconut milk, and cardamom, popular at festivals.</p>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-lg">
                    <div class="text-4xl mb-4">🥥</div>
                    <h3 class="text-xl font-semibold mb-2">Odiyal Kool</h3>
                    <p class="text-gray-600">A spicy seafood porridge made with palmyrah root flour, a Jaffna specialty.</p>
                </div>
            </div>
        </section>

        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Jaffna</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and bicycles are great for exploring. Ferries are needed for island visits like Delft.</p>
                    
                    <h3 class="font-semibold mb-2">👕 Dress Code</h3>
                    <p class="text-gray-200">Dress modestly at temples, covering shoulders and knees. Remove shoes at religious sites.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">May to September is dry and ideal. Avoid heavy rains from October to January.</p>
                    
                    <h3 class="font-semibold mb-2">🎪 Festivals</h3>
                    <p class="text-gray-200">Experience the Nallur Festival in August for vibrant Hindu processions and rituals.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>