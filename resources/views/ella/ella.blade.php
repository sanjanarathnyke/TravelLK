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
    <section class="relative text-white py-20"
        style="background-image: url('{{ asset('assets/images/stock-images/ella.jpg') }}'); background-size: cover; background-position: center;">

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-lg">Ella</h1>
                <p class="text-xl mb-6 text-white drop-shadow">The Scenic Hill Retreat of Sri Lanka</p>

                <div class="flex justify-center space-x-4 text-sm">
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Hiking</span>
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Tea Plantations</span>
                    <span class="bg-white/30 text-white px-3 py-1 rounded font-medium shadow">Scenic Views</span>
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
            @include('Things-To-Do.things_to_do')
        </div>
        <!-- Local Foods Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center flex items-center justify-center">
                <span class="text-4xl mr-3">🍛</span>
                Local Food Highlights
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($foods as $food)
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
        <section class="mt-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Top Attractions in Ella</h2>

            <div class="grid md:grid-cols-3 gap-6 px-4">
                @php
                    $attractions = [
                        ['image' => 'assets/images/attractions/nine-arches.jpg', 'title' => 'Nine Arches Bridge'],
                        ['image' => 'assets/images/attractions/little-adams-peak.jpg', 'title' => 'Little Adam’s Peak'],
                        ['image' => 'assets/images/attractions/ella-rock.jpg', 'title' => 'Ella Rock'],
                        ['image' => 'assets/images/attractions/diyaluma.jpg', 'title' => 'Diyaluma Falls'],
                        ['image' => 'assets/images/attractions/ravana-cave.jpg', 'title' => 'Ravana Cave'],
                        ['image' => 'assets/images/attractions/rawana-falls.jpg', 'title' => 'Ravana Falls'],
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
