<x-template title="Service" active="services">
    <div class="mt-24 lg:mx-14 xl:mx-44 mx-8" data-services="{{ json_encode($services) }}">
        <div class="grid grid-cols-5 justify-between lg:gap-6">
            <div class="lg:col-span-3 col-span-5" data-aos="fade-right">
                <div class="flex flex-col">
                    <h4 class="text-xl font-semibold">Layanan <span class="text-primary">Metrokil</span></h4>
                    <h2 class="text-4xl xl:text-5xl font-semibold mt-3">Kenapa harus <span
                            class="text-primary">Metrokil</span>?</h2>
                    <p class="xl:text-lg lg:text-md opacity-55 font-semibold mt-5">Kenapa Harus Metrokil? Metrokil telah
                        dipercaya selama lebih dari dua dekade dalam mengendalikan hama bergaransi. Mulai dari
                        pengendalian hama rayap, tikus, kecoak, nyamuk, lalat, kutu, tawon/lebah, fumigasi, desinfeksi
                        dan pengendalian hama lainnya.
                        <br><br>
                        Tikus adalah hewan pengerat yang terkenal karena kemampuannya beradaptasi dengan lingkungan
                        manusia. Mereka dapat ditemukan di berbagai tempat, mulai dari rumah tinggal, gudang, hingga
                        area pertanian.
                        <br><br>
                        Ada berbagai cara yang dapat digunakan untuk membasmi tikus, dari yang tradisional hingga
                        teknologi modern. Berikut adalah beberapa metode yang umum digunakan:
                    </p>
                </div>
            </div>
            <div class="col-span-2 justify-self-end lg:block hidden" data-aos="fade-left">
                <img src="https://imgs.search.brave.com/ewPePM7Kfpgek378czv-hge_4Uwp5ZuXfErEjPHH55Y/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTYy/MzUyODczL3Bob3Rv/L3Blc3QtY29udHJv/bC5qcGc_cz02MTJ4/NjEyJnc9MCZrPTIw/JmM9emg5UkNvajBj/cktOQTgwSG5RUnpB/UTRfeTlRMDNKaHBY/N1JmOHpwa2dUcz0"
                    width="400" class="rounded-xl" alt="">
            </div>
        </div>
    </div>

    <div class="mt-16 lg:mt-24 lg:mx-14 xl:mx-44 mx-8">
        <div class="pricing" id="pricing">
            <div class="pricing-header">
                <h2 class="font-semibold text-3xl xl:text-4xl">Pricelist <span class="text-primary">Metrokil</span></h2>
            </div>
            <div class="pricing-content">
                <div class="flex flex-col xl:grid xl:grid-cols-7 mt-8 gap-6">
                    <div class="col-span-4 flex flex-col justify-between h-[455px] overflow-y-auto space-y-4 pr-2 py-1" data-aos="fade-right">
                        @foreach ($services as $service)
                            <x-pricing-card :active="false" :id="$service->id" :value="$service->name" :price="$service->price">
                                {{ $service->name }}
                            </x-pricing-card>
                        @endforeach
                    </div>

                    <!-- Right Container (col-span-3) -->
                    <div class="col-span-3 flex flex-col h-full" data-aos="fade-left">
                        <div
                            class="pricing-detail ring-1 ring-black ring-opacity-20 w-full rounded-xl p-6 flex-grow h-[455px] overflow-y-auto">
                            <div class="pricing-description">
                                <h2 class="text-xl font-semibold">Rincian Layanan</h2>
                                <p class="text-md mt-2">Penyemprotan Pondasi adalah paket yang dapat anda pilih untuk
                                    melakukan penyemprotan terhadap pondasi rumah anda. Dengan harga yang terjangkau,
                                    anda dapat melakukan penyemprotan pondasi dengan pelayanan terbaik dari Metrokil.
                                </p>
                            </div>
                            <div class="pricing-benefit">
                                <h2 class="text-xl font-semibold mt-6">Manfaat Layanan</h2>
                                <ul class="mt-4 flex flex-col gap-3">
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Membunuh serangga yang ada di dalam pondasi</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Mencegah serangga masuk ke dalam rumah</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Membuat pondasi rumah anda lebih kuat</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Menjaga kesehatan keluarga anda</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Memberikan jaminan garansi</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                    <li class="text-lg font-semibold flex justify-between">
                                        <span>Memberikan pelayanan terbaik</span>
                                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mt-16 lg:mt-24 lg:mx-14 xl:mx-44 mx-8 mb-36">
        <div class="benefit-header">
            <h2 class="font-semibold text-3xl lg:text-4xl">Benefit Layanan <span class="text-primary">Metrokil</span>
            </h2>
        </div>
        <div
            class="benefit-content grid md:grid-cols-2 xl:grid-cols-4 mt-10 md:gap-20 lg:gap-24 gap-y-6 xl:gap-y-0 xl:gap-36" data-aos="fade-up">
            <div class="benefit-card flex flex-col items-start gap-4">
                <div class="badge-img rounded-xl p-4 shadow-soft">
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/verify-primary.svg') }}" width="35"
                        alt="">
                </div>
                <h3 class="font-semibold text-2xl mt-2">Tenaga <span class="text-primary">Bersertifikasi</span></h3>
                <p class="text-lg opacity-55">Tenaga kerja Metrokil telah bersertifikasi sehingga anda tidak perlu
                    khawatir
                    dengan kualitas pelayanan kami.</p>
            </div>
            <div class="benefit-card flex flex-col items-start gap-4">
                <div class="badge-img rounded-xl p-4 shadow-soft">
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/house-2-primary.svg') }}" width="35"
                        alt="">
                </div>
                <h3 class="font-semibold text-2xl mt-2">Ramah <span class="text-primary">Lingkungan</span></h3>
                <p class="text-lg opacity-55">Metrokil menggunakan bahan-bahan yang ramah lingkungan sehingga tidak
                    merusak
                    lingkungan sekitar.</p>
            </div>
            <div class="benefit-card flex flex-col items-start gap-4">
                <div class="badge-img rounded-xl p-4 shadow-soft">
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/shield-tick-primary.svg') }}" width="35"
                        alt="">
                </div>
                <h3 class="font-semibold text-2xl mt-2">Jaminan <span class="text-primary">Bebas Hama</span></h3>
                <p class="text-lg opacity-55">Metrokil memberikan jaminan bebas hama selama 3 bulan setelah melakukan
                    layanan
                    kami.</p>
            </div>
            <div class="benefit-card flex flex-col items-start gap-4">
                <div class="badge-img rounded-xl p-4 shadow-soft">
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/timer-1-primary.svg') }}" width="35"
                        alt="">
                </div>
                <h3 class="font-semibold text-2xl mt-2">Layanan <span class="text-primary">24/7</span></h3>
                <p class="text-lg opacity-55">Metrokil memberikan layanan 24 jam sehari, 7 hari seminggu sehingga
                    anda
                    dapat menghubungi kami kapan saja.</p>
            </div>
        </div>
    </div>
</x-template>

<script>
    // Get services data from a data attribute
    const servicesData = document.querySelector('[data-services]').getAttribute('data-services');
    let services = JSON.parse(servicesData);

    console.log(services);

    let rincianLayananList = services.map(service => service.description);

    let manfaatLayananList = services.map(service => service.benefit);

    // Scroll to the #pricing section if the URL contains #pricing
    document.addEventListener('DOMContentLoaded', () => {
        const hash = window.location.hash;
        if (hash === '#pricing') {
            const targetElement = document.querySelector(hash);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        const pricingCards = document.querySelectorAll('.pricing-card');
        const radioButtons = document.querySelectorAll('.pricing-radio input[type="radio"]');
        const rincianLayananElement = document.querySelector('.pricing-description p');
        const manfaatLayananContainer = document.querySelector('.pricing-benefit ul');

        pricingCards.forEach((card, index) => {
            card.addEventListener('click', () => {
                // Update radio button
                const radio = radioButtons[index];
                radio.checked = true;

                // Update card styling
                pricingCards.forEach(card => card.classList.remove('bg-primary', 'text-white'));
                card.classList.add('bg-primary', 'text-white');

                // Update rincian layanan text based on index
                rincianLayananElement.innerHTML = rincianLayananList[index];

                // Update manfaat layanan list
                // First clear the existing list
                manfaatLayananContainer.innerHTML = '';

                // Then add each benefit as a list item
                manfaatLayananList[index].forEach(benefit => {
                    manfaatLayananContainer.innerHTML += `
                    <li class="text-lg font-semibold flex justify-between">
                        <span>${benefit}</span>
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/check-primary.svg') }}" alt="">
                    </li>
                `;
                });
            });
        });
    });
</script>
