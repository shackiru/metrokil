<x-template title="Testimonial" active="testimonial">

    <section class="review-client grid grid-cols-3 lg:w-100 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <main class="col-span-3">
            <h3 class="text-2xl font-medium mb-2">Testimonial <span class="text-primary">Metrokil</span></h3>
            <div class="flex justify-between items-end">
                <h1 class="text-4xl lg:text-5xl font-semibold">Apa kata <span class="text-primary">Mereka</span> ?</h1>
            </div>
            
           <article class="grid grid-cols-6 items-center w-full relative mt-8">
                {{-- Tombol Prev (desktop/laptop) --}}
                <div>
                    <button onclick="scrollTestimonials(-1)"
                        class="hidden lg:flex absolute lg:-left-12 xl:-left-24 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>

                {{-- Slider --}}
                <div id="testimonials-slider"
                    class="flex col-span-6 overflow-x-auto gap-6 scroll-smooth snap-x snap-mandatory"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    
                    {{-- Card 1 --}}
                    <div class="flex flex-col-reverse items-center min-w-full snap-start bg-white border-2 rounded-xl md:gap-6 h-fit md:h-full">
                        <div class="py-12 md:py-20 px-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84 text-justify">
                                “Tim Metrokil sangat profesional, transparan kepada customer, dan penjelasannya sangat detail. Sukses selalu Metrokil!”
                            </p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Heru Sanjaya</h3>
                                <p class="text-sm text-gray-600">Ketua RT</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="flex flex-col-reverse items-center min-w-full snap-start bg-white border-2 rounded-xl md:gap-6 h-fit md:h-full">
                        <div class="py-12 md:py-20 px-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84 text-justify">
                                “Layanan sangat memuaskan, pekerjaannya rapi dan hasilnya benar-benar terasa. Properti saya jadi lebih aman.”
                            </p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Slamet Raharjo</h3>
                                <p class="text-sm text-gray-600">Pemilik Kebun</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="flex flex-col-reverse items-center min-w-full snap-start bg-white border-2 rounded-xl md:gap-6 h-fit md:h-full">
                        <div class="py-12 md:py-20 px-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84 text-justify">
                                “Harga bersaing dan pelayanan ramah. Saya rekomendasikan Metrokil untuk siapa pun yang butuh jasa anti rayap.”
                            </p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Budi Santoso</h3>
                                <p class="text-sm text-gray-600">Pengelola Peternakan</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tombol Next (desktop/laptop) --}}
                <div>
                    <button onclick="scrollTestimonials(1)"
                        class="hidden lg:flex absolute lg:-right-12 xl:-right-24 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                {{-- Tombol Prev/Next (tablet & mobile → tampil di bawah card) --}}
                <div class="flex justify-center gap-6 mt-6 col-span-6 lg:hidden">
                    <button onclick="scrollTestimonials(-1)"
                        class="bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button onclick="scrollTestimonials(1)"
                        class="bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </article>

        </main>
    </section>


    <section class="testimonial-client mt-12 lg:mt-24 w-full bg-primary">
        <main class="py-20 pl-8 w-full">
            <header class="px-8 lg:px-14 xl:px-44 relative">
                <span
                    class="text-9xl text-primary opacity-60 absolute z-1 top-[-20px] left-0 lg:left-6 xl:left-36">"</span>
                <h1 class="text-4xl lg:text-4xl font-semibold z-2 text-white">Testimoni Metrokil</h1>
            </header>

            <article class="testimonials flex mt-4 py-4 gap-6 overflow-x-auto w-full cursor-grab select-none"
                id="testimonials-container" style="scrollbar-width: none; -ms-overflow-style: none;"
                onmousedown="startTestimonialsDrag(event)" onmousemove="testimonialsDragMove(event)"
                onmouseup="endTestimonialsDrag()" onmouseleave="endTestimonialsDrag()"
                ontouchstart="startTestimonialsDrag(event)" ontouchmove="testimonialsDragMove(event)"
                ontouchend="endTestimonialsDrag()" data-aos="fade-left">

                @foreach ($testimonials as $index => $testimonial)
                    <div
                        class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] {{ $index === 0 ? 'ml-8 lg:ml-14 xl:ml-44' : ($index === count($testimonials) - 1 ? 'mr-44' : '') }} shadow-soft">
                        <div class="identity">
                            <h4 class="text-primary font-bold text-xl">{{ $testimonial->name }}</h4>
                            <p class="text-md opacity-70 font-semibold mt-1">{{ $testimonial->bio }}</p>
                        </div>
                        <div class="content mt-5">
                            <span class="text-5xl text-primary font-bold">"</span>
                            <p class="text-lg mt-[-15px] font-semibold">{{ $testimonial->review }}</p>
                        </div>
                    </div>
                @endforeach

            </article>
            <footer class="flex flex-row-reverse gap-6 px-8 lg:px-14 xl:px-44 relative mt-4">
                <button onclick="scrollReview('right')"
                    class="border border-white rounded-full p-4 shadow-md transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <button onclick="scrollReview('left')"
                    class="border border-white rounded-full p-4 shadow-md  transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </footer>
        </main>


    </section>

    <section class="mt-12 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36" id="gallery">
        <header class="gallery-header flex justify-between items-center">
            <h1 class="text-4xl lg:text-4xl font-semibold">Gallery <span class="text-primary">Metrokil</span></h1>
            <div class="gallery-more flex gap-3">
                <p class="font-medium text-lg text-primary"><a href="/testimonials/galleries">Pelajari
                        selengkapnya</a>
                </p>
                <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                    width="20">
            </div>
        </header>
        <div x-data="{
            modalOpen: false,
            modalImage: '',
            modalTitle: '',
            modalDescription: ''
        }">
            <div class="gallery-content grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 mt-6">
                @foreach ($galleries as $item)
                    <div class="gallery-pictures cursor-pointer gap-6 mt-4 lg:mb-12 grid-cols-3"
                        @click="
                        modalOpen = true;
                        modalImage = '{{ Storage::disk('public')->exists($item->image_url) ? Storage::url($item->image_url) : $item->image_url }}';
                        modalTitle = '{{ strip_tags($item->name) }}'; 
                        modalDescription = '{{ strip_tags($item->description) }}';">
                        <img src="{{ Storage::disk('public')->exists($item->image_url) ? Storage::url($item->image_url) : $item->image_url }}"
                            class="rounded-xl h-96 w-full object-cover" alt="">
                        <p class="font-semibold text-center mt-2">{{ $item->name }}</p>
                    </div>
                @endforeach
            </div>
            <div x-show="modalOpen"
                class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 px-6">

                <!-- Click outside to close -->
                <div @click.outside="modalOpen = false"
                    class="bg-white rounded-xl shadow-lg max-w-3xl w-full relative overflow-hidden">

                    <!-- Close Button -->
                    <button @click="modalOpen = false"
                        class="
                        absolute top-2 right-2 text-white bg-primary 
                        bg-opacity-60 hover:bg-opacity-80 rounded-full 
                        w-10 h-10 flex items-center justify-center text-2xl font-bold shadow-lg">
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
    </section>


    <style>
        #testimonials-review-container::-webkit-scrollbar {
            display: none;
        }

        #testimonials-review-container.dragging {
            cursor: grabbing !important;
        }

        #testimonials-container::-webkit-scrollbar {
            display: none;
        }

        #testimonials-container.dragging {
            cursor: grabbing !important;
        }
    </style>

    <script>
        // Testimonials Review drag functionality
        let isTestimonialsReviewDragging = false;
        let testimonialsReviewStartX;
        let testimonialsReviewScrollLeft;
        let testimonialsReviewContainer = document.getElementById('testimonials-review-container');

        function startTestimonialsReviewDrag(e) {
            isTestimonialsReviewDragging = true;
            testimonialsReviewContainer.classList.add('dragging');
            testimonialsReviewStartX = (e.pageX || e.touches[0].pageX) - testimonialsReviewContainer.offsetLeft;
            testimonialsReviewScrollLeft = testimonialsReviewContainer.scrollLeft;
            e.preventDefault();
        }

        function testimonialsReviewDragMove(e) {
            if (!isTestimonialsReviewDragging) return;
            e.preventDefault();
            const x = (e.pageX || e.touches[0].pageX) - testimonialsReviewContainer.offsetLeft;
            const walk = (x - testimonialsReviewStartX) * 2;
            testimonialsReviewContainer.scrollLeft = testimonialsReviewScrollLeft - walk;
        }

        function endTestimonialsReviewDrag() {
            isTestimonialsReviewDragging = false;
            testimonialsReviewContainer.classList.remove('dragging');
        }

        // Testimonials drag functionality
        let isTestimonialsDragging = false;
        let testimonialsStartX;
        let testimonialsScrollLeft;
        let testimonialsContainer = document.getElementById('testimonials-container');

        function startTestimonialsDrag(e) {
            isTestimonialsDragging = true;
            testimonialsContainer.classList.add('dragging');
            testimonialsStartX = (e.pageX || e.touches[0].pageX) - testimonialsContainer.offsetLeft;
            testimonialsScrollLeft = testimonialsContainer.scrollLeft;
            e.preventDefault();
        }

        function testimonialsDragMove(e) {
            if (!isTestimonialsDragging) return;
            e.preventDefault();
            const x = (e.pageX || e.touches[0].pageX) - testimonialsContainer.offsetLeft;
            const walk = (x - testimonialsStartX) * 2;
            testimonialsContainer.scrollLeft = testimonialsScrollLeft - walk;
        }

        function endTestimonialsDrag() {
            isTestimonialsDragging = false;
            testimonialsContainer.classList.remove('dragging');
        }

        function scrollTestimonials(direction) {
            const slider = document.getElementById('testimonials-slider');
            const cardWidth = slider.offsetWidth; 
            slider.scrollBy({
                left: direction * cardWidth,
                behavior: 'smooth'
            });
    }

        function scrollReview(direction) {
            const container = document.getElementById('testimonials-container');
            const scrollAmount = 600;
            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }
    </script>
</x-template>
