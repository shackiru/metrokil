<footer class="bg-primary w-full py-16">
    <div class="lg:mx-14 xl:mx-44 mx-8">
        <div class="grid grid-cols-5 gap-12">
            <div class="footer-menu col-span-5 md:col-span-3 grid-rows-3 flex flex-col justify-between">
                <div class="footer-logo  w-fit flex items-center gap-4">
                    <a href="/" class=""><img src="{{ asset('images/logo.png') }}" width="65"
                            class="bg-white p-2 rounded-2xl" alt="">
                    </a>
                    <div class="footer-navigation grid grid-rows-2" data-aos="fade-up">
                        <p class="text-xl text-white font-semibold">Metrokil</p>
                        <p class="text-white opacity-75">Jasa Pengendali Rayap Untuk Rumah & Bisnis</p>
                    </div>
                </div>
                <div class="mt-6 footer-navigation grid grid-cols-2 lg:grid-cols-4" data-aos="fade-up">
                    <div class="footer-about flex flex-col gap-2">
                        <h4 class="text-white font-semibold text-lg">About Us</h4>
                        <a href="/about" class="text-white opacity-55 hover:opacity-100 transition-all">Tentang
                            Metrokil</a>
                        <a href="/about#visi-metrokil"
                            class="text-white opacity-55 hover:opacity-100 transition-all">Visi dan Misi</a>
                    </div>
                    <div class="footer-service flex flex-col gap-2">
                        <h4 class="text-white font-semibold text-lg">Services</h4>
                        <a href="/services" class="text-white opacity-55 hover:opacity-100 transition-all">Layanan
                            Metrokil</a>
                        <a href="/services#pricing" class="text-white opacity-55 hover:opacity-100 transition-all">Harga
                            layanan</a>
                    </div>
                    <div class="footer-service flex flex-col gap-2">
                        <h4 class="text-white font-semibold text-lg">Testimonial</h4>
                        <a href="/testimonials" class="text-white opacity-55 hover:opacity-100 transition-all">Testimoni
                            Pelanggan</a>
                        <a href="/testimonials/galleries"
                            class="text-white opacity-55 hover:opacity-100 transition-all">Gallery
                            Metrokil</a>
                    </div>
                    <div class="footer-service flex flex-col gap-2">
                        <h4 class="text-white font-semibold text-lg">Blog</h4>
                        <a href="/blogs" class="text-white opacity-55 hover:opacity-100 transition-all">Berita
                            Metrokil</a>
                        <a href="/blogs" class="text-white opacity-55 hover:opacity-100 transition-all">Informasi
                            Metrokil</a>
                    </div>
                </div>
                <div class="footer-socials mt-8 gap-6 opacity-65 hidden md:flex">
                    <img src="{{ asset('icons/socials/ic_baseline-whatsapp.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/mdi_youtube.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/mdi_instagram.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/ant-design_x-outlined.svg') }}" alt="">
                </div>
                <hr class="my-3 md:my-1">
                <p class="text-lg text-white font-semibold opacity-55">Copyright © Metrokil 2025</p>
            </div>
            <div class="footer-info col-span-5 mt-6 md:col-span-2 flex flex-col gap-8">
                <div class="footer-subscribe flex flex-col gap-3" data-aos="fade-left">
                    <h4 class="text-white font-semibold text-lg">Berlangganan ke Blog Metrokil</h4>
                    <div class="bg-primary ring-2 ring-white rounded-lg flex align-center px-4 py-3 gap-4">
                        <input type="text"
                            class=" w-full bg-primary outline-none placeholder:text-white placeholder:opacity-65 text-white rounded-lg font-semibold border-0 focus:border-0 focus:ring-0"
                            placeholder="Ketik email Anda...">
                        <button>
                            <img src="{{ asset('icons/Iconsax/Svg/All/linear/send-1-white.svg') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="footer-location flex flex-col gap-3" data-aos="fade-left">
                    <h4 class="text-white font-semibold text-lg">Lokasi</h4>
                    <div class="w-full rounded-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5811298386343!2d106.72602219999999!3d-6.318620999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e517d2288a55%3A0xe0a2488cf2ae85d3!2sAnti%20Rayap%20Metrokil!5e0!3m2!1sen!2sid!4v1752582105000!5m2!1sen!2sid"
                            height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg w-full"></iframe>
                    </div>
                </div>
                <div class="footer-socials gap-6 opacity-65 flex md:hidden">
                    <img src="{{ asset('icons/socials/ic_baseline-whatsapp.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/mdi_youtube.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/mdi_instagram.svg') }}" alt="">
                    <img src="{{ asset('icons/socials/ant-design_x-outlined.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
