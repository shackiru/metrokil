<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body>
    <div class="w-100 mx-44 mt-10 font-raleway">
        <nav class="flex flex-row justify-between tracking-wider">
            <div class="nav-logo">
                <a href=""><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="nav-items flex items-center h-100 bg-white px-12 shadow-soft rounded-lg">
                <ul class="flex flex-row gap-12 items-center justify-center">
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

        <div class="grid grid-cols-3 w-100 mt-24 gap-20">
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

        <div class="mt-32 grid grid-cols-3 gap-10">
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

        <div class="mt-32">
            <div class="service-header flex justify-between items-center">
                <h1 class="text-4xl font-semibold">Layanan <span class="text-primary">Metrokil</span></h1>
                <div class="service-more flex gap-3">
                    <p>Pelajari selengkapnya
                    </p>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/arrow-right.svg') }}" alt=""
                        width="20">
                </div>
            </div>
            <div class="service-content grid grid-cols-2 grid-rows-2 gap-6 mt-6">
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
            </div>
        </div>
    </div>
</body>

</html>
