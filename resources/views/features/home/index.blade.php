<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
    <style>
        .testimonials::-webkit-scrollbar,
        .blogs::-webkit-scrollbar {
            display: none;
        }

        .testimonials,
        .blogs {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body>
    <div class="w-100 mt-10 font-raleway">
        <nav class="flex flex-row justify-between tracking-wide mx-44">
            <div class="nav-logo">
                <a href=""><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="nav-items flex items-center h-100 bg-white px-12 shadow-soft rounded-lg">
                <ul class="flex flex-row gap-12 items-center justify-center font-semibold">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="nav-button h-100 tracking-normal">
                <button class="button bg-primary text-white px-5 h-full rounded-lg font-semibold">Hubungi Kami</button>
            </div>
        </nav>

        <div class="grid grid-cols-3 w-100 mt-24 gap-20 mx-44">
            <div class="col-span-2">
                <div class="hero">
                    <div class="hero-content">
                        <h1 class="text-5xl font-semibold"><span class="text-primary">Metrokil</span>, Jasa Pengendali
                            Rayap
                            Untuk Rumah & Bisnis
                        </h1>
                        <p class="text-lg mt-10 opacity-55 font-medium">PT Metrokil, perusahaan pest control yang telah
                            menjadi
                            salah satu
                            pemimpin
                            dalam industri ini sejak tahun 1997. Dengan pengalaman dan dedikasi kami selama lebih dari
                            dua dekade, Metrokil telah membangun reputasi yang kuat dalam memberikan layanan terbaik
                            kepada pelanggan kami.</p>
                        <div class="flex gap-6 mt-10">
                            <button
                                class="button bg-primary text-white px-6 py-4 h-full rounded-lg font-semibold">Hubungi
                                Kami</button>
                            <button
                                class="button ring-primary ring-2 inner text-primary px-6 py-4 h-full rounded-lg font-semibold">Daftar
                                Harga</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="hero-image">
                    <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                        class="rounded-lg" alt="">
                    {{-- <img src="{{ asset('images/home_banner.png') }}" alt=""> --}}
                </div>
            </div>
        </div>

        <div class="mt-28 grid grid-cols-3 gap-10 mx-44">
            <div class="col-span-1">
                <img src="https://imgs.search.brave.com/tDwDKckiFCktmSVZfLfjAHN6huS-ZrbafSC3MMxVAvU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTI1/MDQzNjg1NS9waG90/by9ob3VzZS1wZXN0/LWNvbnRyb2wuanBn/P3M9NjEyeDYxMiZ3/PTAmaz0yMCZjPTkx/Nl81TTA0MlVMenlJ/YmoxOUswQXZieVpE/UEhOWl94SEJuUnR0/QTZwaXc9"
                    class="rounded-lg" alt="">
            </div>
            <div class="col-span-2">
                <div class="about-content flex flex-col justify-between h-full">
                    <h1 class="text-4xl font-semibold">Tentang <span class="text-primary">Metrokil</span></h1>
                    <p class="text-lg opacity-70">Kami adalah <span class="text-primary">perusahaan pembasmi hama</span>
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
                    <a href="" class="about-history cursor-pointer">
                        <div class="flex justify-between">
                            <p class="text-lg">Lihat sejarah Metrokil</p>
                            <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right.svg') }}" alt=""
                                width="20">
                        </div>
                        <hr class="mt-3">
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-28 mx-44">
            <div class="service-header flex justify-between items-center">
                <h1 class="text-4xl font-semibold">Layanan <span class="text-primary">Metrokil</span></h1>
                <div class="service-more flex gap-3">
                    <p class="font-medium text-lg text-primary">Pelajari selengkapnya
                    </p>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                        width="20">
                </div>
            </div>
            <div class="service-content grid grid-cols-2 grid-rows-2 gap-4 mt-6">
                <div class="service-item flex justify-between shadow-soft rounded-xl">
                    <div class="service-image">
                        <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                            class="rounded-l-xl " alt="">
                    </div>
                    <div class="service-description p-4 flex flex-col justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                            <p class="text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                                untuk
                                rumah dan bisnis Anda.</p>
                        </div>
                        <div class="w-100 flex justify-end">
                            <button
                                class="flex ring-primary ring-1 text-primary items-center px-3 py-1 font-semibold rounded-lg">Pesan
                                layanan
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="service-item flex justify-between shadow-soft rounded-xl">
                    <div class="service-image">
                        <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                            class="rounded-l-xl " alt="">
                    </div>
                    <div class="service-description p-4 flex flex-col justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                            <p class="text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                                untuk
                                rumah dan bisnis Anda.</p>
                        </div>
                        <div class="w-100 flex justify-end">
                            <button
                                class="flex ring-primary ring-1 text-primary items-center px-3 py-1 font-semibold rounded-lg">Pesan
                                layanan
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="service-item flex justify-between shadow-soft rounded-xl">
                    <div class="service-image">
                        <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                            class="rounded-l-xl " alt="">
                    </div>
                    <div class="service-description p-4 flex flex-col justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                            <p class="text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                                untuk
                                rumah dan bisnis Anda.</p>
                        </div>
                        <div class="w-100 flex justify-end">
                            <button
                                class="flex ring-primary ring-1 text-primary items-center px-3 py-1 font-semibold rounded-lg">Pesan
                                layanan
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="service-item flex justify-between shadow-soft rounded-xl">
                    <div class="service-image">
                        <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                            class="rounded-l-xl " alt="">
                    </div>
                    <div class="service-description p-4 flex flex-col justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold">Pembasmian Rayap</h1>
                            <p class="text-lg mt-2">Metrokil memberikan layanan pembasmian rayap yang efektif dan aman
                                untuk
                                rumah dan bisnis Anda.</p>
                        </div>
                        <div class="w-100 flex justify-end">
                            <button
                                class="flex ring-primary ring-[1.5px] text-primary items-center px-3 py-1 font-semibold rounded-lg">Pesan
                                layanan
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial mt-24 w-full">
            <div class="py-24 bg-primary w-full">
                <div class="px-44 flex justify-between items-center">
                    <h1 class="text-4xl font-semibold text-white"><span class="opacity-55">Testimoni</span> Metrokil
                    </h1>
                    <div class="flex gap-3 text-white">
                        <p class="font-medium text-lg">Pelajari selengkapnya
                        </p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-white.svg') }}" alt=""
                            width="20">
                    </div>
                </div>
                <div class="testimonials flex mt-8 gap-6 overflow-x-auto w-full">
                    <div class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] ml-44">
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
        <div class="blog mt-24 w-full overflow-visible mb-36">
            <div class="w-full left-0">
                <div class="px-44 flex justify-between items-center">
                    <h1 class="text-4xl font-semibold text-black">Blog <span class="text-primary">Metrokil</span></h1>
                    <div class="flex gap-3">
                        <p class="font-medium text-lg text-primary">Pelajari selengkapnya</p>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right-red.svg') }}" alt=""
                            width="20">
                    </div>
                </div>
                <div class="blogs flex mt-4 gap-4 overflow-visible w-full overflow-x-auto py-4">
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] ml-44 relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-blue h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Berita</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Bagaimana pengaruh hama terhadap tanaman
                                    yang
                                    dikonsumsi oleh manusia?</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 2 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-primary h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Informasi</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Jasa Metrokil telah buka cabang di pulau
                                    Sumatera! Ayo gunakan jasa Metrokil sekarang!</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 20 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-blue h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Berita</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Bagaimana pengaruh hama terhadap tanaman
                                    yang
                                    dikonsumsi oleh manusia?</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 2 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-primary h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Informasi</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Jasa Metrokil telah buka cabang di pulau
                                    Sumatera! Ayo gunakan jasa Metrokil sekarang!</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 20 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-blue h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Berita</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Bagaimana pengaruh hama terhadap tanaman
                                    yang
                                    dikonsumsi oleh manusia?</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 2 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item shadow-soft rounded-xl min-w-[350px] max-w-[350px] mr-44 relative bg-white">
                        <div class="image">
                            <img src="https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc"
                                class="rounded-t-xl " alt="">
                        </div>
                        <div class="px-6 pb-6">
                            <div
                                class="badge absolute bg-primary h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
                                Informasi</div>
                            <div class="content mt-8 flex flex-col gap-3">
                                <p class="text-lg mt-[-15px] font-semibold">Jasa Metrokil telah buka cabang di pulau
                                    Sumatera! Ayo gunakan jasa Metrokil sekarang!</p>
                                <span class="text-sm font-semibold opacity-55">Admin Metrokil · 20 jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <footer class="mt-36 bg-primary w-full py-16">
            <div class="mx-44">
                <div class="grid grid-cols-5">
                    <div class="footer-menu col-span-3 grid-rows-3 flex flex-col justify-between">
                        <div class="footer-logo  w-fit flex items-center gap-4">
                            <a href="" class=""><img src="{{ asset('images/logo.png') }}"
                                    width="65" class="bg-white p-2 rounded-2xl" alt="">
                            </a>
                            <p class="text-xl text-white font-semibold">Metrokil</p>
                        </div>
                        <div class="mt-6 footer-navigation grid grid-cols-3">
                            <div class="footer-about flex flex-col gap-2">
                                <h4 class="text-white font-semibold text-lg">About Us</h4>
                                <a href="" class="text-white opacity-55">Tentang Kami</a>
                                <a href="" class="text-white opacity-55">Visi dan Misi Metrokil</a>
                                <a href="" class="text-white opacity-55">Sejarah Metrokil</a>
                            </div>
                            <div class="footer-service flex flex-col gap-2">
                                <h4 class="text-white font-semibold text-lg">Services</h4>
                                <a href="" class="text-white opacity-55">Penyemprotan Pondasi</a>
                                <a href="" class="text-white opacity-55">Penyemprotan Dinding</a>
                                <a href="" class="text-white opacity-55">Penyemprotan Anti Rayap pada Area
                                    Taman</a>
                            </div>
                            <div class="footer-service flex flex-col gap-2">
                                <h4 class="text-white font-semibold text-lg">Testimonial</h4>
                                <a href="" class="text-white opacity-55">Testimoni Pelanggan</a>
                                <a href="" class="text-white opacity-55">Gallery Metrokil</a>
                            </div>
                        </div>
                        <div class="footer-socials mt-8 flex gap-6 opacity-65">
                            <img src="{{ asset('icons/socials/ic_baseline-whatsapp.svg') }}" alt="">
                            <img src="{{ asset('icons/socials/mdi_youtube.svg') }}" alt="">
                            <img src="{{ asset('icons/socials/mdi_instagram.svg') }}" alt="">
                            <img src="{{ asset('icons/socials/ant-design_x-outlined.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="footer-info col-span-2 flex flex-col gap-8">
                        <div class="footer-subscribe flex flex-col gap-3">
                            <h4 class="text-white font-semibold text-lg">Berlangganan ke Blog Metrokil</h4>
                            <div class="bg-primary ring-2 ring-white rounded-lg flex align-center px-4 py-3 gap-4">
                                <input type="text"
                                    class=" w-full bg-primary outline-none placeholder:text-white placeholder:opacity-65 text-white rounded-lg font-semibold"
                                    placeholder="Ketik email Anda...">
                                <button>
                                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/send-1-white.svg') }}"
                                        alt="">
                                </button>
                            </div>
                        </div>
                        <div class="footer-location flex flex-col gap-3">
                            <h4 class="text-white font-semibold text-lg">Lokasi</h4>
                            <div class="w-full rounded-lg">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623.1586470859122!2d106.79777815851703!3d-6.189863913711569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76971a5e855%3A0xaa88a8a84eb8dbef!2sWisma%20Asia%202!5e0!3m2!1sen!2sid!4v1735282334916!5m2!1sen!2sid"
                                    height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="rounded-lg w-full"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-8">
                <p class="text-lg text-white font-semibold opacity-55">Copyright © Metrokil 2024</p>
            </div>
        </footer>
    </div>
</body>

</html>
