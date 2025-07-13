<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions - Discover Sri Lanka</title>
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

    <!-- Header -->
    <section class="bg-sri-lanka-blue text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Explore Sri Lanka's Regions</h1>
            <p class="text-xl max-w-3xl mx-auto">Discover the diverse landscapes, rich culture, and unique experiences
                across the island</p>
        </div>
    </section>

    <!-- Regions Grid -->
    <section class="py-16">
        @php
        function tagColor($tag) {
        return match (strtolower(trim($tag))) {
        'cultural heritage', 'ancient sites', 'unesco heritage', 'ancient capital', 'buddhist heritage' =>
        'bg-yellow-100 text-yellow-800',
        'hill country', 'cool climate', 'scenic views', 'tea country' => 'bg-green-100 text-green-800',
        'beaches', 'pristine beaches', 'surfing', 'diving' => 'bg-blue-100 text-blue-800',
        'colonial history', 'urban' => 'bg-gray-200 text-gray-800',
        'hiking' => 'bg-emerald-100 text-emerald-800',
        'tamil culture' => 'bg-pink-100 text-pink-800',
        'unique cuisine', 'street food' => 'bg-red-100 text-red-800',
        'wildlife' => 'bg-indigo-100 text-indigo-800',
        default => 'bg-slate-100 text-slate-800',
        };
        }
        @endphp

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($regions as $region)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset($region->image) }}" alt="{{ $region->name }}" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">{{ $region->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ $region->description }}</p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(explode(',', $region->tags) as $tag)
                            <span class="{{ tagColor($tag) }} px-2 py-1 rounded text-sm">{{ trim($tag) }}</span>
                            @endforeach
                        </div>

                        <a href="{{ url('/' . Str::slug($region->name)) }}"
                            class="inline-block bg-sri-lanka-blue text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-800 transition-colors">
                            Explore {{ $region->name }}
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Footer -->
    @include('Footer.footer')
</body>

</html>