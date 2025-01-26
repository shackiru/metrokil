@props(['active'])

<nav class="flex flex-row justify-between tracking-wide mx-44">
    <div class="nav-logo">
        <a href=""><img src="{{ asset('images/logo.png') }}" alt=""></a>
    </div>
    <div class="nav-items flex items-center h-100 bg-white px-12 shadow-soft rounded-lg">
        <ul class="flex flex-row gap-12 items-center justify-center font-semibold">
            <li class="@if ($active == 'home') active @endif hover:active"><a href="/">Home</a></li>
            <li class="@if ($active == 'about') active @endif hover:active"><a href="/about">About Us</a></li>
            <li class="@if ($active == 'services') active @endif hover:active"><a href="/services">Services</a></li>
            <li class="@if ($active == 'pricing') active @endif hover:active"><a href="/services#pricing">Pricing</a></li>
            <li class="@if ($active == 'testimonial') active @endif hover:active"><a href="/testimonials">Testimonial</a></li>
            <li class="@if ($active == 'blog') active @endif hover:active"><a href="/blogs">Blog</a></li>
            <li class="@if ($active == 'contact') active @endif hover:active"><a href="/contact">Contact Us</a></li>
        </ul>
    </div>
    <div class="nav-button h-100 tracking-normal hover:shadow-regular transition">
        <a href="https://api.whatsapp.com/send/?phone=6281998405395&text=Halo!,+Saya+tertarik+untuk+menyewa+jasa+Metrokil!&type=phone_number&app_absent=0"><button class="button bg-primary text-white px-5 h-full rounded-lg font-semibold">Hubungi Kami</button></a>
    </div>
</nav>
