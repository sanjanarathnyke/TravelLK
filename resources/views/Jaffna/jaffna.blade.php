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
    <section class="relative bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white py-20"
        style="background-image: url('{{ asset('assets/images/stock-images/jaffna.jpg') }}'); background-size: cover; background-position: center;">

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Jaffna</h1>
                <p class="text-xl mb-6 drop-shadow">The Cultural Heart of Northern Sri Lanka</p>
                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Tamil Culture</span>
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Historical Sites</span>
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Islands</span>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Top Attractions -->
            @include('Top-Attraction.top_attractions')


            <!-- Things to Do -->
            <section class="bg-white rounded-lg shadow-lg p-8 mt-12">
                <h2 class="text-3xl font-bold mb-6 text-gray-900 flex items-center">
                    <span class="text-4xl mr-3">🎭</span>
                    Things to Do
                </h2>

                @if ($thingsToDo)
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_1 }}</h3>
                            <p class="text-gray-600">{{ $thingsToDo->description_activity_1 }}</p>
                        </div>

                        @if ($thingsToDo->activity_2)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_2 }}</h3>
                                <p class="text-gray-600">{{ $thingsToDo->description_activity_2 }}</p>
                            </div>
                        @endif

                        @if ($thingsToDo->activity_3)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-2">{{ $thingsToDo->activity_3 }}</h3>
                                <p class="text-gray-600">{{ $thingsToDo->description_activity_3 }}</p>
                            </div>
                        @endif

                        @if ($thingsToDo->activity_4)
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
        @include('Food-Highlights.food_highlights')

        <!-- Travel Tips -->
        <section class="mt-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Top Attractions in Jaffna</h2>

            <div class="grid md:grid-cols-3 gap-6 px-4">
                @php
                    $attractions = [
                        ['image' => 'assets/images/attractions/jaffna-fort.jpg', 'title' => 'Jaffna Fort'],
                        [
                            'image' => 'assets/images/attractions/nallur-kandaswamy.jpg',
                            'title' => 'Nallur Kandaswamy Temple',
                        ],
                        ['image' => 'assets/images/attractions/delft-island.jpg', 'title' => 'Delft Island'],
                        ['image' => 'assets/images/attractions/nagadeepa.jpg', 'title' => 'Nagadeepa Viharaya'],
                        ['image' => 'assets/images/attractions/jaffna-library.jpg', 'title' => 'Jaffna Public Library'],
                        ['image' => 'assets/images/attractions/point-pedro.jpg', 'title' => 'Point Pedro Lighthouse'],
                    ];
                @endphp

                @foreach ($attractions as $item)
                    <div class="rounded-lg overflow-hidden shadow-lg group">
                        <div class="h-48 bg-cover bg-center transition-transform duration-300 group-hover:scale-105"
                            style="background-image: url('{{ asset($item['image']) }}');"></div>
                        <div class="bg-white p-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $item['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>

</html>
