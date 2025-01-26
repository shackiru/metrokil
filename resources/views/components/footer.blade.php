<footer class="mt-36 bg-primary w-full py-16">
    <div class="mx-44">
        <div class="grid grid-cols-5">
            <div class="footer-menu col-span-3 grid-rows-3 flex flex-col justify-between">
                <div class="footer-logo  w-fit flex items-center gap-4">
                    <a href="" class=""><img src="{{ asset('images/logo.png') }}" width="65"
                            class="bg-white p-2 rounded-2xl" alt="">
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
                            class=" w-full bg-primary outline-none placeholder:text-white placeholder:opacity-65 text-white rounded-lg font-semibold border-0 focus:border-0 focus:ring-0"
                            placeholder="Ketik email Anda...">
                        <button>
                            <img src="{{ asset('icons/Iconsax/Svg/All/linear/send-1-white.svg') }}" alt="">
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
