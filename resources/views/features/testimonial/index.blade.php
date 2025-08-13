<x-template title="Testimonial" active="testimonial">
    {{-- <section class="grid grid-cols-3 w-100 mt-24 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <main class="md:col-span-2 col-span-3" data-aos="fade-right">
            <div class="hero">
                <h3 class="text-2xl font-semibold mb-2">Testimonial <span class="text-primary">Metrokil</span></h3>
                <h1 class="text-5xl font-semibold">An <span class="text-primary">Innovation</span> for Your
                    Environment
                </h1>
                <p class="text-lg mt-4 opacity-55 font-medium">Tikus merupakan salah satu hama yang dapat
                    menimbulkan masalah serius di lingkungan rumah, pertanian, maupun industri. Kehadiran tikus
                    tidak hanya mengganggu kenyamanan, tetapi juga berisiko bagi kesehatan dan merusak barang-barang
                    berharga.
                </p>
                <p class="text-lg mt-4 opacity-55 font-medium">Tikus adalah hewan pengerat yang terkenal karena
                    kemampuannya beradaptasi dengan lingkungan manusia. Mereka dapat ditemukan di berbagai tempat,
                    mulai dari rumah tinggal, gudang, hingga area pertanian.
                </p>
                <p class="text-lg mt-4 opacity-55 font-medium">Ada berbagai cara yang dapat digunakan untuk membasmi
                    tikus, dari yang tradisional hingga teknologi modern. Berikut adalah beberapa metode yang umum
                    digunakan:
                </p>
            </div>
        </main>
        <aside class="md:col-span-1 hidden md:block" data-aos="fade-left">
            <div class="hero-image">
                <img src="{{ asset('images/Testimoni.jpg') }}" class="rounded-lg" alt="">
            </div>
        </aside>
    </section> --}}

    <section class="review-client grid grid-cols-3 w-100 mt-18 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <main class="col-span-3">
            {{-- <h1 class="text-4xl lg:text-4xl font-semibold z-2">Apa kata <span class="text-primary">mereka?</span></h1> --}}
            <h3 class="text-2xl font-semibold mb-2">Testimonial <span class="text-primary">Metrokil</span></h3>
            <div class="flex justify-between items-end">
                <h1 class="text-5xl font-semibold">Apa kata <span class="text-primary">Mereka</span> ?
                </h1>
                <div class="gallery-more flex gap-3">
                    <p class="font-medium text-lg text-primary"><a href="/public/testimonials/galleries">Pelajari
                            selengkapnya</a>
                    </p>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                        width="20">
                </div>
            </div>
            <article class="grid grid-cols-8 items-center w-full relative mt-12">

                <div class="min-w-full">
                    <button onclick="scrollTestimonials(-1)"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary  transition duration-200">
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
                    <div
                        class="flex flex-col-reverse md:grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl md:gap-6 h-fit md:h-full">
                        <div class="grid grid-rows-4 py-12 md:py-20 pl-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Tim Metrokil sangat profesional,
                                transparan kepada customer, dan penjelasannya sangat detail. Sukses selalu Metrokil!”
                            </p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Shaquille Ditama Putra</h3>
                                <p class="text-sm text-gray-600">CEO 10</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/person-example.png') }}" alt="Foto"
                            class="h-full object-cover max-h-64 md:max-h-full">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl gap-6">
                        <div class="grid grid-rows-4 py-20 pl-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Pelayanan yang sangat
                                professional dari Metrokil. Metrokil dapat membasmi hama di Kantor saya yang seluas 2000
                                Hektar. Terima kasih dan saya akan kembali ke anda apabila saya memiliki gangguan
                                terhadap anda!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Evo Broken</h3>
                                <p class="text-sm text-gray-600">CTO of Bank Saya</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="h-full object-cover">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl gap-6">
                        <div class="grid grid-rows-4 py-20 pl-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Sebagai masyarakat Indonesia,
                                saya sangat bangga dengan perusahaan ini karena telah berhasil melayani lebih dari
                                ratusan ribu pelanggan dan 98% dari pelanggan tersebut puas dengan layanan Metrokil,
                                terima kasih!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Gagat the GOAT</h3>
                                <p class="text-sm text-gray-600">CEO of Pembasmi Hama</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="h-full object-cover">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl gap-6">
                        <div class="grid grid-rows-4 py-20 pl-8">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Saya dan istri saya selalu
                                terganggu dengan rayap yang ada di kebun saya. Namun, saya sangat terharu dan tidak
                                merasa terganggu lagi setelah Metrokil datang ke kebun saya. Kalian hebat, sukses
                                selalu!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Andreas Wirananda</h3>
                                <p class="text-sm text-gray-600">Owner of Catering Olive Oil</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="h-full object-cover">
                    </div>
                </div>

                <div>
                    <button onclick="scrollTestimonials(1)"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary hover:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </article>
        </main>
    </section>


    <section class="testimonial-client mt-24 w-full bg-primary">
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
                <p class="font-medium text-lg text-primary"><a href="/public/testimonials/galleries">Pelajari
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
                        @click="modalOpen = true; 
                        modalImage = 'http://localhost:8080/storage/{{ $item->image_url }}'; 
                        modalTitle = '{{ strip_tags($item->name) }}'; 
                        modalDescription = '{{ strip_tags($item->description) }}';">
                        <img src="http://localhost:8080/storage/{{ $item->image_url }}"
                            class="rounded-xl h-56 w-full object-cover" alt="">
                        <p class="font-semibold text-center mt-2">{{ $item->name }}</p>
                    </div>
                @endforeach
            </div>
            <div x-show="modalOpen"
                class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">

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
            const container = document.getElementById("testimonials-slider");
            const scrollAmount = 620; // Sesuaikan sesuai min-width testimonial
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        function scrollReview(direction) {
            const container = document.getElementById('testimonials-container');
            const scrollAmount = 600; // Atur sesuai kebutuhan
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
