<x-template title="Testimonial" active="testimonial">
    <section class="grid grid-cols-3 w-100 mt-24 gap-20 lg:mx-14 xl:mx-44 mx-8">
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
                <img src="{{ asset('images/About-img.png') }}" class="rounded-lg" alt="">
            </div>
        </aside>
    </section>

    <section class="review-client grid grid-cols-3 w-100 mt-24 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <main class="col-span-3">
            <h1 class="text-4xl lg:text-5xl font-semibold z-2">Apa kata <span class="text-primary">mereka?</span></h1>
            <article class="grid grid-cols-8 items-center w-full relative mt-12">

                <div class="min-w-full">
                    <button onclick="scrollTestimonials(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary hover:text-white transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    </button>
                </div>

                {{-- Slider --}}
                <div id="testimonials-slider" class="flex col-span-6 overflow-x-auto gap-6 scroll-smooth snap-x snap-mandatory"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl p-6 items-start gap-6 h-[400px]">
                        <div class="grid grid-rows-4">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Tim Metrokil sangat profesional, transparan kepada customer, dan penjelasannya sangat detail. Sukses selalu Metrokil!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Shaquille Ditama Putra</h3>
                                <p class="text-sm text-gray-600">CEO 10</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="w-28 h-28 object-cover">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl p-6 items-start gap-6 h-[400px]">
                        <div class="grid grid-rows-4">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Pelayanan yang sangat professional dari Metrokil. Metrokil dapat membasmi hama di Kantor saya yang seluas 2000 Hektar. Terima kasih dan saya akan kembali ke anda apabila saya memiliki gangguan terhadap anda!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Evo Broken</h3>
                                <p class="text-sm text-gray-600">CTO of Bank Saya</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="w-28 h-28 object-cover">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl p-6 items-start gap-6 h-[400px]">
                        <div class="grid grid-rows-4">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Sebagai masyarakat Indonesia, saya sangat bangga dengan perusahaan ini karena telah berhasil melayani lebih dari ratusan ribu pelanggan dan 98% dari pelanggan tersebut puas dengan layanan Metrokil, terima kasih!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Gagat the GOAT</h3>
                                <p class="text-sm text-gray-600">CEO of Pembasmi Hama</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="w-28 h-28 object-cover">
                    </div>
                    <div class="grid grid-cols-2 items-center min-w-full snap-start bg-white border-2 rounded-xl p-6 items-start gap-6 h-[400px]">
                        <div class="grid grid-rows-4">
                            <p class="text-lg text-gray-800 mb-4 row-span-3 max-w-84">“Saya dan istri saya selalu terganggu dengan rayap yang ada di kebun saya. Namun, saya sangat terharu dan tidak merasa terganggu lagi setelah Metrokil datang ke kebun saya. Kalian hebat, sukses selalu!”</p>
                            <div>
                                <h3 class="text-primary font-bold text-xl">Andreas Wirananda</h3>
                                <p class="text-sm text-gray-600">Owner of Catering Olive Oil</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/gallery1.png') }}" alt="Foto" class="w-28 h-28 object-cover">
                    </div>
                </div>

                <div>
                    <button onclick="scrollTestimonials(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-primary rounded-full p-2 shadow-md hover:bg-primary hover:text-white transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    </button>
                </div>

            </article>
        </main>
    </section>


    <section class="testimonial-client mt-24 w-full bg-primary">
        <main class="py-24 w-full">
            <header class="px-8 lg:px-14 xl:px-44 relative">
                <span
                    class="text-9xl text-primary opacity-60 absolute z-1 top-[-20px] left-0 lg:left-6 xl:left-36">"</span>
                <h1 class="text-4xl lg:text-5xl font-semibold z-2 text-white">Testimoni Metrokil</h1>
            </header>

            <article 
            class="testimonials flex mt-4 py-4 gap-6 overflow-x-auto w-full cursor-grab select-none"
            id="testimonials-container" style="scrollbar-width: none; -ms-overflow-style: none;"
            onmousedown="startTestimonialsDrag(event)" onmousemove="testimonialsDragMove(event)"
            onmouseup="endTestimonialsDrag()" onmouseleave="endTestimonialsDrag()"
            ontouchstart="startTestimonialsDrag(event)" ontouchmove="testimonialsDragMove(event)"
            ontouchend="endTestimonialsDrag()" data-aos="fade-left">

                <div
                    class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] ml-8 lg:ml-14 xl:ml-44 shadow-soft">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Shaquille Ditama Putra</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Magang BCA, Ex-PPTI 14</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">"</span>
                        <p class="text-lg mt-[-15px] font-semibold">Terimakasih kepada Tim Metrokil, kerjanya
                            sangat profesional,
                            transparan kepada customer dan penjelasannya detail terkait layanan yang diberikan.
                            Sukses selalu Metrokil!</p>
                    </div>
                </div>

                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] shadow-soft">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Aurelia Natasha</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Software Engineer, Ex-PPTI 12</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">"</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerjasama dengan Tim Metrokil sangat memuaskan!
                            Timnya responsif,
                            detail, dan memastikan setiap kebutuhan saya terpenuhi. Metrokil adalah pilihan terbaik
                            untuk layanan profesional!</p>
                    </div>
                </div>

                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] shadow-soft">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Jonathan Fajar</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Product Manager, Ex-PPTI 13</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">"</span>
                        <p class="text-lg mt-[-15px] font-semibold">Metrokil memberikan pengalaman layanan yang
                            luar biasa!
                            Hasil kerja yang profesional dan tim yang sangat kooperatif. Tidak ragu untuk
                            merekomendasikan mereka.</p>
                    </div>
                </div>

                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] shadow-soft">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Stephanie Wijaya</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Data Scientist, Ex-PPTI 15</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">"</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerja sama dengan Metrokil sangat mengesankan.
                            Pelayanan cepat, transparan, dan sangat profesional. Tim mereka benar-benar tahu cara
                            memenuhi ekspektasi pelanggan.</p>
                    </div>
                </div>

                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] mr-44 shadow-soft">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Stephanie Wijaya</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Data Scientist, Ex-PPTI 15</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">"</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerja sama dengan Metrokil sangat mengesankan.
                            Pelayanan cepat, transparan, dan sangat profesional. Tim mereka benar-benar tahu cara
                            memenuhi ekspektasi pelanggan.</p>
                    </div>
                </div>

            </article>
        </main>

        <footer class="flex flex-row-reverse gap-8">
            <button onclick="scrollReview('right')" class="border border-white rounded-full p-4 shadow-md transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <button onclick="scrollReview('left')" class="border border-white rounded-full p-4 shadow-md  transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </footer>

    </section>

    <section class="mt-12 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36" id="gallery">
        <header class="gallery-header flex justify-between items-center">
            <h1 class="text-4xl lg:text-5xl font-semibold">Gallery <span class="text-primary">Metrokil</span></h1>
            <div class="gallery-more flex gap-3">
                <p class="font-medium text-lg text-primary"><a href="testimonials/galleries">Pelajari selengkapnya</a>
                </p>
                <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                    width="20">
            </div>
        </header>
        <main class="gallery-content grid grid-cols-3 gap-4 mt-6">
        @foreach ($galleries as $item)
            <div class="gallery-pictures cursor-pointer gap-6 mt-2 mb-12 lg:mb-12 grid-cols-3" 
                    @click="modalOpen = true; modalImage = 'http://localhost:8080/storage/{{ $item->image_url }}'; modalTitle = '{{ strip_tags($item->name) }}'; modalDescription = '{{ strip_tags($item->description) }}';">
                <img src="http://localhost:8080/storage/{{ $item->image_url }}" class="rounded-xl h-56 w-full object-cover" alt="">
                <p class="font-semibold text-center mt-2">{{ $item->name }}</p>
            </div>
        @endforeach
        </main>
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
            const scrollAmount = 300; // Atur sesuai kebutuhan
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
    </script>
</x-template>
