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