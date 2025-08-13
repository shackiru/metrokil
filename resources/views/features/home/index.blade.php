<x-template title="Homepage" active="home">
    <div class="grid grid-cols-3 lg:grid-cols-5 xl:grid-cols-3 lg w-100 mt-20 lg:mt-32 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <div class="col-span-3 lg:col-span-3 xl:col-span-2" data-aos="fade-right">
            <div class="hero">
                <div class="hero-content">
                    <p class="text-4xl xl:text-5xl font-semibold"><span class="text-primary">Metrokil</span>, Jasa
                        Pengendali
                        Rayap
                        Untuk Rumah & Bisnis
                    </p>
                    <p class="text-md xl:text-lg mt-6 lg:mt-10 opacity-55 font-medium text-justify">Selamat
                        datang di
                        website PT Metropolitan Agro Kimia Lestari <span
                            class="text-primary font-semibold">Metrokil</span>, perusahaan pest control yang telah
                        menjadi
                        salah satu pemimpin dalam
                        industri ini sejak tahun 1997. Dengan pengalaman dan dedikasi kami selama lebih dari dua dekade,
                        Metrokil telah membangun reputasi yang kuat dalam memberikan layanan terbaik kepada pelanggan
                        kami. Tujuan utama kami adalah untuk menjadikan lingkungan sekitar lebih bersih, aman, dan
                        nyaman. Kami sangat peduli terhadap kepuasan pelanggan, dan itulah mengapa pelayanan terbaik
                        merupakan prioritas utama kami.</p>
                    <div class="flex gap-6 mt-6 lg:mt-10">
                        <a
                            href="https://api.whatsapp.com/send/?phone=6281998405395&text=Halo!,+Saya+tertarik+untuk+menyewa+jasa+Metrokil!&type=phone_number&app_absent=0"><button
                                class="hover:shadow-regular transition button bg-primary text-white px-6 py-3 text-sm md:px-6 md:py-4 md:h-full rounded-lg font-semibold">Hubungi
                                Kami</button></a>
                        <a href="/public/services#pricing"><button
                                class="hover:shadow-regular transition button ring-primary ring-2 inner text-primary px-6 py-3 text-sm md:px-6 md:py-4 md:h-full rounded-lg font-semibold hover:bg-primary hover:text-white">Daftar
                                Harga</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block col-span-1 lg:col-span-2 xl:col-span-1 max-w-[400px]" data-aos="fade-left">
            <div class="hero-image">
                <img src="{{ asset('images/Home.jpg') }}" class="rounded-lg" alt="">
                {{-- <img src="{{ asset('images/home_banner.png') }}" alt=""> --}}
            </div>
        </div>
    </div>

    <div class="mt-16 lg:mt-36 grid grid-cols-3 gap-10 lg:mx-14 xl:mx-44 mx-8">
        <div class="hero-image hidden lg:block" data-aos="fade-right">
            <img src="{{ asset('images/About.jpg') }}" class="rounded-lg h-[400px] object-fill" alt="">
        </div>
        <div class="col-span-3 lg:col-span-2" data-aos="fade-left">
            <div class="about-content flex flex-col justify-between h-full">
                <h1 class="text-3xl lg:text-4xl font-semibold">Tentang <span class="text-primary">Metrokil</span></h1>
                <p class="lg:text-lg opacity-70 mt-6 text-justify">Kami adalah <span class="text-primary">perusahaan
                        pengendalian
                        hama</span>
                    yang
                    berbasis di Jakarta,
                    Indonesia. Kami telah dipercaya lebih dari <span class="text-primary">5000+ klien</span> yang
                    telah bekerja sama dengan kami.
                    <br><br>
                    Kami telah memiliki beberapa cabang dari <span class="text-primary">Jakarta, Bandung,
                        Jogja</span>, hingga <span class="text-primary">Malang</span>.
                    <br><br>
                    Metrokil memiliki beberapa layanan termasuk <span class="text-primary">pembasmian tikus</span>,
                    <span class="text-primary">serangga berkaki sepuluh</span>, dan
                    <span class="text-primary">rayap</span>. Mulai gunakan layanan Metrokil sekarang, dengan begitu
                    lingkungan Anda menjadi <span class="text-primary">nyaman dan
                        aman</span> bersama <span class="text-primary">Metrokil</span>.
                </p>
                <a href="/public/about" class="group about-history cursor-pointer mt-6">
                    <div class="flex justify-between">
                        <p class="text-lg group-hover:text-primary transition">Lihat sejarah Metrokil</p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right.svg') }}" alt=""
                            width="20">
                    </div>
                    <hr class="mt-3 group-hover:border-primary transition">
                </a>
            </div>
        </div>
    </div>

    <div class="mt-12 lg:mt-28 lg:mx-14 xl:mx-44 mx-8">
        <div class="service-header flex justify-between items-center">
            <h1 class="text-3xl lg:text-4xl font-semibold">Layanan <span class="text-primary">Metrokil</span></h1>
            <a href="/public/services">
                <div class="service-more flex gap-3">
                    <p class="font-medium lg:text-lg text-primary hover:underline transition">Pelajari selengkapnya
                    </p>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                        width="20">
                </div>
            </a>
        </div>
        <div class="service-content grid grid-cols-1 lg:grid-cols-2 grid-rows-2 gap-4 mt-6">
            <div class="service-item flex flex-col md:flex-row justify-between shadow-soft rounded-xl md:h-52 h-full"
                data-aos="fade-right">
                <div class="service-image min-w-40">
                    <img src="{{ asset('images/About.jpg') }}"
                        class="rounded-t-xl md:rounded-tr-none md:rounded-l-xl md:h-full h-64 w-full md:w-fit object-cover"
                        alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Anti Rayap Imidaclorprid (Import)</h1>
                        <p class="md:text-sm text-md xl:text-lg mt-2">Menggunakan metode drill injection dan power
                            spraying. Kebersihan
                            pasca treatment menjadi tanggung jawab kami.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/public/contact"><button
                                class="flex ring-primary ring-[1.5px] text-primary items-center px-3 py-1 font-semibold rounded-lg group hover:bg-primary hover:text-white transition text-sm md:text-md">Pesan
                                layanan
                                <svg class="text-primary group-hover:text-white transition"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service-item flex flex-col md:flex-row justify-between shadow-soft rounded-xl md:h-52 h-full"
                data-aos="fade-left">
                <div class="service-image min-w-40">
                    <img src="{{ asset('images/Home.jpg') }}"
                        class="rounded-t-xl md:rounded-tr-none md:rounded-l-xl md:h-full h-64 w-full md:w-fit object-cover"
                        alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Anti Rayap Imidaclorprid (Lokal)</h1>
                        <p class="lg:text-sm text-md xl:text-lg mt-2">Menggunakan metode drill injection dan power
                            spraying. Kebersihan
                            pasca treatment menjadi tanggung jawab kami. </p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/public/contact"><button
                                class="flex ring-primary ring-[1.5px] text-primary items-center px-3 py-1 font-semibold rounded-lg group hover:bg-primary hover:text-white transition text-sm md:text-md">Pesan
                                layanan
                                <svg class="text-primary group-hover:text-white transition"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service-item flex flex-col md:flex-row justify-between shadow-soft rounded-xl md:h-52 h-full"
                data-aos="fade-right">
                <div class="service-image min-w-40">
                    <img src="{{ asset('images/Service.jpg') }}"
                        class="rounded-t-xl md:rounded-tr-none md:rounded-l-xl md:h-full h-64 w-full md:w-fit object-cover"
                        alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Anti Rayap Cypermethrin (Lokal)</h1>
                        <p class="lg:text-sm text-md xl:text-lg mt-2">Menggunakan metode drill injection dan power
                            spraying. Kebersihan
                            pasca treatment menjadi tanggung jawab kami.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/public/contact"><button
                                class="flex ring-primary ring-[1.5px] text-primary items-center px-3 py-1 font-semibold rounded-lg group hover:bg-primary hover:text-white transition text-sm md:text-md">Pesan
                                layanan
                                <svg class="text-primary group-hover:text-white transition"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service-item flex flex-col md:flex-row justify-between shadow-soft rounded-xl md:h-52 h-full"
                data-aos="fade-left">
                <div class="service-image min-w-40">
                    <img src="{{ asset('images/Testimoni.jpg') }}"
                        class="rounded-t-xl md:rounded-tr-none md:rounded-l-xl md:h-full h-64 w-full md:w-fit object-cover"
                        alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Paket Pengendalian Hama Tikus</h1>
                        <p class="lg:text-sm text-md xl:text-lg mt-2">Menggunakan metode perangkap hidup, perangkap
                            mati, dan racun.
                            Kebersihan pasca treatment menjadi tanggung jawab kami.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/public/contact"><button
                                class="flex ring-primary ring-[1.5px] text-primary items-center px-3 py-1 font-semibold rounded-lg group hover:bg-primary hover:text-white transition text-sm md:text-md">Pesan
                                layanan
                                <svg class="text-primary group-hover:text-white transition"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-client mt-24 w-full bg-primary">
        <main class="py-24 w-full">
            <header class="px-8 lg:px-14 xl:px-44 flex justify-between items-center">
                <h1 class="text-3xl lg:text-4xl font-semibold text-white"><span class="opacity-55">Testimoni</span>
                    Metrokil
                </h1>
                <a href="/public/testimonials">
                    <div class="flex gap-3 text-white">
                        <p class="font-medium lg:text-lg hover:underline transition">Pelajari selengkapnya
                        </p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-white.svg') }}" alt=""
                            width="20">
                    </div>
                </a>
            </header>

            <article class="testimonials flex mt-4 py-4 gap-6 overflow-x-auto w-full cursor-grab select-none"
                id="testimonials-container" style="scrollbar-width: none; -ms-overflow-style: none;"
                onmousedown="startTestimonialsDrag(event)" onmousemove="testimonialsMove(event)"
                onmouseup="endTestimonialsDrag()" onmouseleave="endTestimonialsDrag()"
                ontouchstart="startTestimonialsDrag(event)" ontouchmove="testimonialsMove(event)"
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

    <!-- Move the blog section here -->
    <div class="blog mt-12 lg:mt-24 w-full overflow-visible mb-20 lg:mb-36">
        <div class="w-full left-0">
            <div class="px-8 lg:px-14 xl:px-44 flex justify-between items-center">
                <h1 class="text-3xl lg:text-4xl font-semibold text-black">Blog <span
                        class="text-primary">Metrokil</span></h1>
                <a href="/public/blogs">
                    <div class="flex gap-3">
                        <p class="font-medium lg:text-lg text-primary hover:underline transition">Pelajari selengkapnya
                        </p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                            width="20">
                    </div>
                </a>
            </div>
            <div class="blogs px-8 lg:px-14 xl:px-44 flex mt-4 gap-4 overflow-visible w-full overflow-x-auto py-4 cursor-grab select-none"
                id="blogs-container" style="scrollbar-width: none; -ms-overflow-style: none;"
                onmousedown="startBlogDrag(event)" onmousemove="blogMove(event)" onmouseup="endBlogDrag()"
                onmouseleave="endBlogDrag()" ontouchstart="startBlogDrag(event)" ontouchmove="blogMove(event)"
                ontouchend="endBlogDrag()">
                @foreach ($blogs as $blog)
                    <a href="/public/blogs/{{ $blog->id }}" data-aos="fade-left">
                        <x-blog-card date="{{ $blog->created_at }}" category="{{ $blog->category }}"
                            image="{{ $blog->image_url }}" author="{{ $blog->user->name }}" isLimitWidth="true">
                            {{ \Str::limit($blog->title, 50) }}
                        </x-blog-card>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        #testimonials-container::-webkit-scrollbar {
            display: none;
        }

        #testimonials-container.dragging {
            cursor: grabbing !important;
        }

        #blogs-container::-webkit-scrollbar {
            display: none;
        }

        #blogs-container.dragging {
            cursor: grabbing !important;
        }
    </style>

    <script>
        // Testimonials drag functionality
        let testimonialsIsDragging = false;
        let testimonialsStartX;
        let testimonialsScrollLeft;
        let testimonialsContainer = document.getElementById('testimonials-container');

        function startTestimonialsDrag(e) {
            testimonialsIsDragging = true;
            testimonialsContainer.classList.add('dragging');
            testimonialsStartX = (e.pageX || e.touches[0].pageX) - testimonialsContainer.offsetLeft;
            testimonialsScrollLeft = testimonialsContainer.scrollLeft;
            e.preventDefault();
        }

        function testimonialsMove(e) {
            if (!testimonialsIsDragging) return;
            e.preventDefault();
            const x = (e.pageX || e.touches[0].pageX) - testimonialsContainer.offsetLeft;
            const walk = (x - testimonialsStartX) * 2;
            testimonialsContainer.scrollLeft = testimonialsScrollLeft - walk;
        }

        function endTestimonialsDrag() {
            testimonialsIsDragging = false;
            testimonialsContainer.classList.remove('dragging');
        }

        // Blog drag functionality
        let blogIsDragging = false;
        let blogStartX;
        let blogScrollLeft;
        let blogContainer = document.getElementById('blogs-container');

        function startBlogDrag(e) {
            blogIsDragging = true;
            blogContainer.classList.add('dragging');
            blogStartX = (e.pageX || e.touches[0].pageX) - blogContainer.offsetLeft;
            blogScrollLeft = blogContainer.scrollLeft;
            e.preventDefault();
        }

        function blogMove(e) {
            if (!blogIsDragging) return;
            e.preventDefault();
            const x = (e.pageX || e.touches[0].pageX) - blogContainer.offsetLeft;
            const walk = (x - blogStartX) * 2;
            blogContainer.scrollLeft = blogScrollLeft - walk;
        }

        function endBlogDrag() {
            blogIsDragging = false;
            blogContainer.classList.remove('dragging');
        }

        // Scroll button functionality for testimonials
        function scrollReview(direction) {
            const container = document.getElementById('testimonials-container');
            const scrollAmount = 400; // Adjust as needed
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

        // Add event listeners when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Prevent default drag behavior on images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('dragstart', e => e.preventDefault());
            });

            // Add smooth scrolling behavior
            const containers = [testimonialsContainer, blogContainer];
            containers.forEach(container => {
                if (container) {
                    container.style.scrollBehavior = 'smooth';
                }
            });
        });
    </script>
</x-template>
