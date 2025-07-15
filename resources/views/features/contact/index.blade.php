<x-template title="Contact" active="contact">
    <div class="mt-24 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36">
        <div class="contact-header">
            <h2 class="font-semibold text-4xl">Contact <span class="text-primary">Us</span></h2>
        </div>
        <div class="contact-content mt-6">
            <div class="grid lg:grid-cols-2 gap-8 items-stretch">
                <!-- Contact Form -->
                <div class="contact-form shadow-soft rounded-xl p-6 flex flex-col" data-aos="fade-right">
                    <h3 class="text-2xl font-semibold">Tertarik dengan jasa <span class="text-primary">Metrokil</span>?
                    </h3>
                    {{-- <form action="" method="GET" class="mt-6 flex flex-col flex-grow"> --}}
                    <div class="input-name mb-4">
                        <label for="name" class="font-semibold">Nama</label>
                        <input type="text" class="w-full rounded-xl border-2 border-gray-200 py-3 px-4 mt-1"
                            name="name" id="name" placeholder="Masukkan nama...">
                    </div>
                    <div class="input-email mb-4">
                        <label for="email" class="font-semibold">Alamat Email</label>
                        <input type="text" class="w-full rounded-xl border-2 border-gray-200 py-3 px-4 mt-1"
                            name="email" id="email" placeholder="Masukkan alamat email...">
                    </div>
                    <div class="input-address mb-4">
                        <label for="address" class="font-semibold">Alamat Domisili</label>
                        <textarea type="text" class="w-full rounded-xl border-2 border-gray-200 py-3 px-4 mt-1" name="address" id="address"
                            rows="5" placeholder="Masukkan alamat domisili..."></textarea>
                    </div>
                    <div class="input-complaint mb-4">
                        <label for="complaint" class="font-semibold">Keluhan</label>
                        <select name="complaint" id="complaint"
                            class="w-full rounded-xl border-2 border-gray-200 py-3 px-4 mt-1">
                            <option value="1">Pilih Keluhan</option>
                            <option value="2">Pelayanan</option>
                            <option value="3">Produk</option>
                            <option value="4">Lainnya</option>
                        </select>
                    </div>
                    <a
                        href="https://api.whatsapp.com/send/?phone=6281998405395&text=Halo!,+Saya+tertarik+untuk+menyewa+jasa+Metrokil!&type=phone_number&app_absent=0"><button
                            class="mt-auto bg-primary text-white font-semibold w-full py-3 text-lg rounded-xl">Kirim</button></a>
                    {{-- </form> --}}        
                </div>

                <!-- Contact Details and Map -->
                <div class="contact-detail flex flex-col" data-aos="fade-left">
                    <!-- Contact Info -->
                    <div class="contact-call mb-6">
                        <h3 class="font-semibold text-3xl">Hubungi <span class="text-primary">Metrokil</span></h3>
                        <div class="contacts flex flex-col gap-4 mt-4">
                            {{-- <div class="contact-item flex gap-4 items-center">
                                <img src="{{ asset('icons/Iconsax/Svg/All/linear/call-primary.svg') }}" alt="">
                                <p class="font-semibold">+62 812 3456 7890</p>
                            </div>
                            <div class="contact-item flex gap-4 items-center">
                                <img src="{{ asset('icons/Iconsax/Svg/All/linear/directbox-notif-primary.svg') }}"
                                    alt="">
                                <p class="font-semibold">contact.admin@metrokil.co.id</p>
                            </div>
                            <div class="contact-item flex gap-4 items-center">
                                <img src="{{ asset('icons/Iconsax/Svg/All/linear/clock-primary.svg') }}" alt="">
                                <p class="font-semibold">Senin - Jumat, 09:00 - 17:00 (WIB)</p>
                            </div> --}}
                            <div class="contact-item flex gap-4 items-start">
                                <img src="{{ asset('icons/Iconsax/Svg/All/linear/location-primary.svg') }}" class="mt-1" alt="">
                                <div>
                                    <p class="font-semibold">Jabodetabek</p>
                                    <p class="font-semibold">Bandung Raya</p>
                                    <p class="font-semibold">Surabaya Raya</p>
                                    <p class="font-semibold">Malang Raya</p>
                                    <p class="font-semibold">Semarang Raya</p>
                                    <p class="font-semibold">Yogyakarta-Solo Raya</p>
                                    <p class="font-semibold">Jambi</p>
                                    <p class="font-semibold">Palembang</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="contact-map flex-grow rounded-xl overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5811298386343!2d106.72602219999999!3d-6.318620999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e517d2288a55%3A0xe0a2488cf2ae85d3!2sAnti%20Rayap%20Metrokil!5e0!3m2!1sen!2sid!4v1752582105000!5m2!1sen!2sid" class="w-full h-72 lg:h-full border-0" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
