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