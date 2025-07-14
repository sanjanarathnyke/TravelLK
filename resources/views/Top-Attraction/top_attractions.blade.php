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