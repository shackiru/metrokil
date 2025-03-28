<x-template title="Homepage" active="home">
    <div class="grid grid-cols-3 lg:grid-cols-5 xl:grid-cols-3 lg w-100 mt-20 lg:mt-24 gap-20 lg:mx-14 xl:mx-44 mx-8">
        <div class="col-span-3 lg:col-span-3 xl:col-span-2">
            <div class="hero">
                <div class="hero-content">
                    <h1 class="text-4xl xl:text-5xl font-semibold"><span class="text-primary">Metrokil</span>, Jasa
                        Pengendali
                        Rayap
                        Untuk Rumah & Bisnis
                    </h1>
                    <p class="text-md xl:text-lg mt-6 lg:mt-6 opacity-55 font-medium text-justify">Selamat datang di
                        website <span class="text-primary">PT Metrokil</span>, perusahaan pest control yang telah menjadi
                        salah satu pemimpin dalam
                        industri ini sejak tahun 1997. Dengan pengalaman dan dedikasi kami selama lebih dari dua dekade,
                        Metrokil telah membangun reputasi yang kuat dalam memberikan layanan terbaik kepada pelanggan
                        kami. Tujuan utama kami adalah untuk menjadikan lingkungan sekitar lebih bersih, aman, dan
                        nyaman. Kami sangat peduli terhadap kepuasan pelanggan, dan itulah mengapa pelayanan terbaik
                        merupakan prioritas utama kami.</p>
                    <div class="flex gap-6 mt-6 lg:mt-6">
                        <a
                            href="https://api.whatsapp.com/send/?phone=6281998405395&text=Halo!,+Saya+tertarik+untuk+menyewa+jasa+Metrokil!&type=phone_number&app_absent=0"><button
                                class="hover:shadow-regular transition button bg-primary text-white px-6 py-3 text-sm md:px-6 md:py-4 md:h-full rounded-lg font-semibold">Hubungi
                                Kami</button></a>
                        <a href="/services#pricing"><button
                                class="hover:shadow-regular transition button ring-primary ring-2 inner text-primary px-6 py-3 text-sm md:px-6 md:py-4 md:h-full rounded-lg font-semibold hover:bg-primary hover:text-white">Daftar
                                Harga</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block col-span-1 lg:col-span-2 xl:col-span-1">
            <div class="hero-image">
                <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                    class="rounded-lg" alt="">
                {{-- <img src="{{ asset('images/home_banner.png') }}" alt=""> --}}
            </div>
        </div>
    </div>

    <div class="mt-12 lg:mt-28 grid grid-cols-3 gap-10 lg:mx-14 xl:mx-44 mx-8">
        <div class="hidden lg:block col-span-1">
            <img src="https://imgs.search.brave.com/tDwDKckiFCktmSVZfLfjAHN6huS-ZrbafSC3MMxVAvU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTI1/MDQzNjg1NS9waG90/by9ob3VzZS1wZXN0/LWNvbnRyb2wuanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPTkx/Nl81TTA0MlVMenlJ/YmoxOUswQXZieVpE/UEhOWl94SEJuUnR0/QTZwaXc9"
                class="rounded-lg" alt="">
        </div>
        <div class="col-span-3 lg:col-span-2">
            <div class="about-content flex flex-col justify-between h-full">
                <h1 class="text-3xl lg:text-4xl font-semibold">Tentang <span class="text-primary">Metrokil</span></h1>
                <p class="lg:text-lg opacity-70 mt-6 text-justify">Kami adalah <span class="text-primary">perusahaan
                        pembasmi
                        hama</span>
                    yang
                    berbasis di Jakarta,
                    Indonesia. Kami telah dipercaya lebih dari <span class="text-primary">500+ klien</span> yang
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
                <a href="/about" class="group about-history cursor-pointer mt-6">
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
            <a href="/services">
                <div class="service-more flex gap-3">
                    <p class="font-medium lg:text-lg text-primary hover:underline transition">Pelajari selengkapnya
                    </p>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                        width="20">
                </div>
            </a>
        </div>
        <div class="service-content grid grid-cols-1 lg:grid-cols-2 grid-rows-2 gap-4 mt-6">
            <div class="service-item flex justify-between shadow-soft rounded-xl">
                <div class="service-image min-w-40">
                    <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                        class="rounded-l-xl h-full object-cover" alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                        <p class="lg:text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                            untuk
                            rumah dan bisnis Anda.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/contact"><button
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
            <div class="service-item flex justify-between shadow-soft rounded-xl">
                <div class="service-image min-w-40">
                    <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                        class="rounded-l-xl h-full object-cover" alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                        <p class="lg:text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                            untuk
                            rumah dan bisnis Anda.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/contact"><button
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
            <div class="service-item flex justify-between shadow-soft rounded-xl">
                <div class="service-image min-w-40">
                    <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                        class="rounded-l-xl h-full object-cover" alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                        <p class="lg:text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                            untuk
                            rumah dan bisnis Anda.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/contact"><button
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
            <div class="service-item flex justify-between shadow-soft rounded-xl">
                <div class="service-image min-w-40">
                    <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                        class="rounded-l-xl h-full object-cover" alt="">
                </div>
                <div class="service-description p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                        <p class="lg:text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                            untuk
                            rumah dan bisnis Anda.</p>
                    </div>
                    <div class="w-100 flex justify-end mt-4">
                        <a href="/contact"><button
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

    <div class="testimonial mt-12 lg:mt-24 w-full">
        <div class="py-16 lg:py-24 bg-primary w-full">
            <div class="px-8 lg:px-14 xl:px-44 flex justify-between items-center">
                <h1 class="text-3xl lg:text-4xl font-semibold text-white"><span class="opacity-55">Testimoni</span>
                    Metrokil
                </h1>
                <a href="/testimonials">
                    <div class="flex gap-3 text-white">
                        <p class="font-medium lg:text-lg hover:underline transition">Pelajari selengkapnya
                        </p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-white.svg') }}" alt=""
                            width="20">
                    </div>
                </a>
            </div>
            <div class="testimonials flex mt-8 gap-6 overflow-x-auto w-full">
                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] ml-8 lg:ml-14 xl:ml-44">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Shaquille Ditama Putra</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Magang BCA, Ex-PPTI 14</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">“</span>
                        <p class="text-lg mt-[-15px] font-semibold">Terimakasih kepada Tim Metrokil, kerjanya
                            sangat profesional,
                            transparan kepada customer dan penjelasannya detail terkait layanan yang diberikan.
                            Sukses selalu Metrokil!</p>
                    </div>
                </div>
                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px]">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Aurelia Natasha</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Software Engineer, Ex-PPTI 12</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">“</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerjasama dengan Tim Metrokil sangat memuaskan!
                            Timnya responsif,
                            detail, dan memastikan setiap kebutuhan saya terpenuhi. Metrokil adalah pilihan terbaik
                            untuk layanan profesional!</p>
                    </div>
                </div>
                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px]">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Jonathan Fajar</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Product Manager, Ex-PPTI 13</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">“</span>
                        <p class="text-lg mt-[-15px] font-semibold">Metrokil memberikan pengalaman layanan yang
                            luar biasa!
                            Hasil kerja yang profesional dan tim yang sangat kooperatif. Tidak ragu untuk
                            merekomendasikan mereka.</p>
                    </div>
                </div>
                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px]">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Stephanie Wijaya</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Data Scientist, Ex-PPTI 15</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">“</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerja sama dengan Metrokil sangat mengesankan.
                            Pelayanan cepat, transparan, dan sangat profesional. Tim mereka benar-benar tahu cara
                            memenuhi ekspektasi pelanggan.</p>
                    </div>
                </div>
                <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] mr-44">
                    <div class="identity">
                        <h4 class="text-primary font-bold text-xl">Stephanie Wijaya</h4>
                        <p class="text-md opacity-70 font-semibold mt-1">Data Scientist, Ex-PPTI 15</p>
                    </div>
                    <div class="content mt-5">
                        <span class="text-5xl text-primary font-bold">“</span>
                        <p class="text-lg mt-[-15px] font-semibold">Kerja sama dengan Metrokil sangat mengesankan.
                            Pelayanan cepat, transparan, dan sangat profesional. Tim mereka benar-benar tahu cara
                            memenuhi ekspektasi pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Move the blog section here -->
    <div class="blog mt-12 lg:mt-24 w-full overflow-visible mb-20 lg:mb-36">
        <div class="w-full left-0">
            <div class="px-8 lg:px-14 xl:px-44 flex justify-between items-center">
                <h1 class="text-3xl lg:text-4xl font-semibold text-black">Blog <span
                        class="text-primary">Metrokil</span></h1>
                <a href="/blogs">
                    <div class="flex gap-3">
                        <p class="font-medium lg:text-lg text-primary hover:underline transition">Pelajari selengkapnya
                        </p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                            width="20">
                    </div>
                </a>
            </div>
            <div class="blogs px-8 lg:px-14 xl:px-44 flex mt-4 gap-4 overflow-visible w-full overflow-x-auto py-4">
                @foreach ($blogs as $blog)
                    <a href="/blogs/{{ $blog->id }}">
                        <x-blog-card date="{{ $blog->created_at }}" category="{{ $blog->category }}"
                            image="{{ $blog->image_url }}" author="{{ $blog->user->name }}" isLimitWidth="true">
                            {{ \Str::limit($blog->title, 50) }}
                        </x-blog-card>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</x-template>
