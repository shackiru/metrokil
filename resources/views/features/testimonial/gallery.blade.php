<x-template title="Testimonial" active="Testimonial"> 
    <div class="mt-12 mx-44" x-data="{ modalOpen: false, modalImage: '', modalTitle: '', modalDescription: '' }">
        <div class="gallery-header flex justify-between items-center">
            <h1 class="text-4xl font-semibold">Gallery <span class="text-primary">Metrokil</span></h1>
        </div>

        <div class="gallery-content grid grid-cols-3 gap-4 mt-6">
            @foreach ($gallery as $item)
                <div class="gallery-pictures cursor-pointer gap-6 mt-6 mb-20 lg:mb-36 grid-cols-3" 
                     @click="modalOpen = true; modalImage = 'http://localhost:8000/storage/{{ $item->image_url }}'; modalTitle = '{{ strip_tags($item->name) }}'; modalDescription = '{{ $item->description }}';">
                    <img src="http://localhost:8000/storage/{{ $item->image_url }}" class="rounded-xl h-56 w-full object-cover" alt="">
                    <p class="font-semibold text-center mt-2">{{ $item->name }}</p>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div x-show="modalOpen" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" x-cloak>
            <div class="bg-white rounded-xl shadow-lg max-w-3xl w-full relative overflow-hidden">
                <!-- Close Button -->
                <button @click="modalOpen = false" class="absolute top-2 right-2 text-gray-500 hover:text-black text-xl">
                    &times;
                </button>

                <!-- Image -->
                <img :src="modalImage" alt="Gallery Image" class="w-full max-h-[500px] object-cover">

                <!-- Caption -->
                <div class="p-6 bg-white">
                    <h2 class="text-2xl font-bold text-left" x-text="modalTitle"></h2>
                    <p class="text-gray-600 mt-2 text-left" x-text="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>
</x-template>
