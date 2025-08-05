@props(['active'])

<nav
    class="sticky w-full top-0 lg:top-5 left-0 z-50 bg-white lg:bg-transparent shadow-md lg:shadow-none flex flex-row justify-between tracking-wide lg:px-14 lg:text-sm xl:gap-0 xl:text-md xl:px-44 py-4 px-8">
    <div class="nav-logo">
        <a href="/public/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
    </div>

    <button id="menu-toggle" class="lg:hidden focus:outline-none z-50 relative">
        <svg id="menu-icon" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg id="close-icon" class="w-8 h-8 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div id="nav-menu"
        class="hidden lg:flex flex-col lg:flex-row items-center absolute top-full left-0 w-full lg:w-auto bg-white shadow-lg lg:shadow-soft rounded-lg px-8 lg:px-8 xl:px-12 py-6 lg:py-0 lg:static transition-all duration-300 z-[-1] lg:z-auto">
        <ul
            class="flex flex-col lg:flex-row gap-8 lg:gap-8 xl:gap-12 items-center justify-center font-semibold text-md xl:text-md">
            <li class="@if ($active == 'home') active @endif hover:active"><a href="/public/">Beranda</a></li>
            <li class="@if ($active == 'about') active @endif hover:active"><a href="/public/about">Tentang</a>
            </li>
            <li class="@if ($active == 'services') active @endif hover:active"><a
                    href="/public/services">Layanan</a>
            </li>
            <li class="@if ($active == 'pricing') active @endif hover:active"><a
                    href="/public/services#pricing">Harga</a></li>
            <li class="@if ($active == 'testimonial') active @endif hover:active"><a
                    href="/public/testimonials">Testimoni</a></li>
            <li class="@if ($active == 'blog') active @endif hover:active"><a href="/public/blogs">Blog</a>
            </li>
            <li class="@if ($active == 'contact') active @endif hover:active"><a href="/public/contact">Kontak
                    Kami</a>
            </li>
        </ul>
    </div>

    <div class="nav-button h-100 tracking-normal hover:shadow-regular transition hidden lg:block">
        <a
            href="/publichttps://api.whatsapp.com/send/?phone=6281998405395&text=Halo!,+Saya+tertarik+untuk+menyewa+jasa+Metrokil!&type=phone_number&app_absent=0">
            <button class="button bg-primary text-white px-5 h-full rounded-lg font-semibold">Hubungi Kami</button>
        </a>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        let menu = document.getElementById('nav-menu');
        let menuIcon = document.getElementById('menu-icon');
        let closeIcon = document.getElementById('close-icon');

        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden', 'z-[-1]');
            menu.classList.add('z-0');
        } else {
            menu.classList.add('hidden', 'z-[-1]');
            menu.classList.remove('z-0');
        }

        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>
