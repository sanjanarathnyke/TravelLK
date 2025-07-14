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

                @if($attractions)
                <div class="space-y-6">
                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $attractions->attraction_no1 }}</h3>
                        <p class="text-gray-600">{{ $attractions->description_attraction_no1 }}</p>
                    </div>

                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $attractions->attraction_no2 }}</h3>
                        <p class="text-gray-600">{{ $attractions->description_attraction_no2 }}</p>
                    </div>

                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $attractions->attraction_no3 }}</h3>
                        <p class="text-gray-600">{{ $attractions->description_attraction_no3 }}</p>
                    </div>

                    <div class="border-l-4 border-sri-lanka-blue pl-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $attractions->attraction_no4 }}</h3>
                        <p class="text-gray-600">{{ $attractions->description_attraction_no4 }}</p>
                    </div>
                </div>
                @else
                <p>No attractions found for this region.</p>
                @endif
            </section>


            <!-- Things to Do -->
            <section class="bg-white rounded-lg shadow-lg p-8 mt-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-900 flex items-center">
                    <span class="text-4xl mr-3">🎭</span>
                    Things to Do
                </h2>

                @if($thingsToDo)
                <div class="space-y-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_1 }}</h3>
                        <p class="text-gray-600">{{ $thingsToDo->description_activity_1 }}</p>
                    </div>

                    @if($thingsToDo->activity_2)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_2 }}</h3>
                        <p class="text-gray-600">{{ $thingsToDo->description_activity_2 }}</p>
                    </div>
                    @endif

                    @if($thingsToDo->activity_3)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_3 }}</h3>
                        <p class="text-gray-600">{{ $thingsToDo->description_activity_3 }}</p>
                    </div>
                    @endif

                    @if($thingsToDo->activity_4)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_4 }}</h3>
                        <p class="text-gray-600">{{ $thingsToDo->description_activity_4 }}</p>
                    </div>
                    @endif
                </div>
                @else
                <p>No things to do found for this region.</p>
                @endif
            </section>

        </div>

        <!-- Local Foods Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center flex items-center justify-center">
                <span class="text-4xl mr-3">🍛</span>
                Local Food Highlights
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach($foods as $food)
                <div class="relative text-center p-6 rounded-lg overflow-hidden"
                    style="background-image: url('{{ asset($food->image) }}'); background-size: cover; background-position: center;">

                    <div class="absolute inset-0 bg-black/30"></div> <!-- dark overlay -->

                    <div class="relative z-10 text-white">
                        <div class="text-4xl mb-4">🍽️</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $food->food_name }}</h3>
                        <p>{{ $food->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>


        <!-- Travel Tips -->
        <section class="mt-12 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Travel Tips for Kandy</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">🚗 Getting Around</h3>
                    <p class="text-gray-200 mb-4">Tuk-tuks and buses are readily available. Walking is pleasant in the
                        city center around the lake and temple area.</p>

                    <h3 class="font-semibold mb-2">👕 Dress Code</h3>
                    <p class="text-gray-200">Modest clothing required for temple visits. Cover shoulders and knees,
                        remove shoes before entering.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">🌡️ Best Time to Visit</h3>
                    <p class="text-gray-200 mb-4">Year-round destination. December to April is drier, while May to
                        September can be rainy but lush and green.</p>

                    <h3 class="font-semibold mb-2">🎪 Festivals</h3>
                    <p class="text-gray-200">Visit during Esala Perahera (July/August) for the spectacular temple
                        procession with elephants and dancers.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>

</html>