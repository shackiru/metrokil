<x-template title="Service" active="services">
    <div class="mt-24 lg:mx-14 xl:mx-44 mx-8">
        <div class="grid grid-cols-5 justify-between lg:gap-6">
            <div class="lg:col-span-3 col-span-5">
                <div class="flex flex-col">
                    <h4 class="text-xl font-semibold">Layanan <span class="text-primary">Metrokil</span></h4>
                    <h2 class="text-4xl xl:text-5xl font-semibold mt-3">Kenapa harus <span
                            class="text-primary">Metrokil</span>?</h2>
                    <p class="xl:text-lg lg:text-md opacity-55 font-semibold mt-5">Sementara dalam Kamus Besar Bahasa
                        Indonesia
                        dijelaskan
                        pelayanan sebagai hal, cara, atau hasil
                        pekerjaan melayani. Dalam pengertian lain, menurut Moenir (2015: 27) pelayanan hakikatnya adalah
                        serangkaian kegiatan, karena itu merupakan proses.
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
            <div class="col-span-2 justify-self-end lg:block hidden">
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
                    <div class="col-span-4 flex flex-col justify-between h-[455px] overflow-y-auto space-y-4 pr-2 py-1">
                        <x-pricing-card :active="true" id="1" value="Pondasi">Anti Rayap Imidaclorprid
                            (Impor)</x-pricing-card>
                        <x-pricing-card :active="false" id="2" value="Spray">Anti Rayap Imidaclorprid
                            (Lokal)</x-pricing-card>
                        <x-pricing-card :active="false" id="3" value="Control">Anti Rayap Cypermethrin
                            (Lokal)</x-pricing-card>
                        <x-pricing-card :active="false" id="4" value="Cleaning">Paket Pengendalian Hama
                            Tikus</x-pricing-card>
                        <x-pricing-card :active="false" id="5" value="Cleaning">Basmi Nyamuk dan
                            Kecoak</x-pricing-card>
                        <x-pricing-card :active="false" id="6" value="Cleaning">Paket Basmi
                            Lalat</x-pricing-card>
                        <x-pricing-card :active="false" id="6" value="Cleaning">Basmi Kutu</x-pricing-card>
                        <x-pricing-card :active="false" id="6" value="Cleaning">Basmi
                            Tawon/Lebah</x-pricing-card>
                        <x-pricing-card :active="false" id="6" value="Cleaning">Fumigasi</x-pricing-card>
                        <x-pricing-card :active="false" id="6" value="Cleaning">Desinfeksi</x-pricing-card>
                    </div>

                    <!-- Right Container (col-span-3) -->
                    <div class="col-span-3 flex flex-col h-full">
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
            class="benefit-content grid md:grid-cols-2 xl:grid-cols-4 mt-10 md:gap-20 lg:gap-24 gap-y-6 xl:gap-y-0 xl:gap-36">
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
    let rincianLayananList = [
        "Penyemprotan Pondasi adalah paket yang dapat anda pilih untuk melakukan penyemprotan terhadap pondasi rumah anda. Dengan harga yang terjangkau, anda dapat melakukan penyemprotan pondasi dengan pelayanan terbaik dari Metrokil menggunakan bahan Imidaclorprid impor yang berkualitas tinggi.",

        "Layanan Spray Anti Rayap menggunakan bahan Imidaclorprid lokal yang efektif untuk membasmi rayap di area tertentu rumah anda. Dengan teknologi spray modern, kami dapat menjangkau area-area yang sulit dan memberikan perlindungan maksimal.",

        "Control Anti Rayap dengan Cypermethrin lokal adalah solusi ekonomis untuk pengendalian rayap jangka panjang. Bahan aktif Cypermethrin efektif membunuh dan mencegah rayap kembali ke rumah anda.",

        "Paket Pengendalian Hama Tikus dari Metrokil menawarkan solusi komprehensif untuk masalah tikus di rumah atau bisnis anda. Kami menggunakan kombinasi metode perangkap, umpan, dan teknik pencegahan untuk memberantas tikus dan mencegah kembalinya mereka.",

        "Layanan Basmi Nyamuk dan Kecoak kami menggunakan insektisida yang aman namun efektif untuk memberantas nyamuk dan kecoak di rumah anda. Penyemprotan dilakukan oleh teknisi berpengalaman di area-area yang menjadi sarang kedua hama ini.",

        "Paket Basmi Lalat Metrokil menggunakan kombinasi metode pengendalian untuk memberantas lalat dari properti anda. Kami menawarkan solusi jangka pendek dan jangka panjang untuk mencegah infestasi lalat di masa depan.",

        "Layanan Basmi Kutu kami dirancang khusus untuk mengatasi masalah kutu pada kasur, furnitur, dan area lainnya. Kami menggunakan bahan khusus yang efektif membunuh kutu dan telurnya tanpa merusak barang-barang anda.",

        "Metrokil menawarkan layanan Basmi Tawon/Lebah yang aman dan efektif. Tim kami akan mengidentifikasi dan menghilangkan sarang, serta mengambil tindakan pencegahan untuk mencegah tawon atau lebah kembali ke properti anda.",

        "Layanan Fumigasi Metrokil adalah solusi menyeluruh untuk infestasi hama yang parah. Proses fumigasi menggunakan gas yang dapat menembus ke celah-celah terkecil untuk membasmi semua jenis hama, termasuk serangga dan tikus.",

        "Layanan Desinfeksi kami menggunakan bahan desinfektan berkualitas tinggi untuk membunuh bakteri, virus, dan mikroorganisme berbahaya lainnya di rumah atau kantor anda. Sempurna untuk menjaga kesehatan keluarga atau karyawan anda."
    ]

    let manfaatLayananList = [
        // 0: Anti Rayap Imidaclorprid (Impor)
        [
            "Membunuh serangga yang ada di dalam pondasi",
            "Mencegah serangga masuk ke dalam rumah",
            "Membuat pondasi rumah anda lebih kuat",
            "Menjaga kesehatan keluarga anda",
            "Memberikan jaminan garansi",
            "Memberikan pelayanan terbaik"
        ],

        // 1: Anti Rayap Imidaclorprid (Lokal)
        [
            "Efektif membasmi koloni rayap",
            "Melindungi furnitur kayu dari kerusakan",
            "Mencegah infestasi rayap baru",
            "Menggunakan bahan lokal berkualitas",
            "Harga lebih ekonomis dibanding bahan impor",
            "Hasil terlihat dalam waktu singkat"
        ],

        // 2: Anti Rayap Cypermethrin (Lokal)
        [
            "Membasmi rayap secara efektif",
            "Perlindungan jangka panjang untuk rumah anda",
            "Mencegah rayap kembali ke rumah anda",
            "Biaya lebih terjangkau",
            "Aman untuk penghuni rumah",
            "Dilakukan oleh tenaga ahli bersertifikat"
        ],

        // 3: Paket Pengendalian Hama Tikus
        [
            "Menghilangkan tikus dari rumah anda",
            "Mencegah tikus kembali ke rumah anda",
            "Menghilangkan sumber penyakit dari tikus",
            "Menjaga sanitasi rumah anda",
            "Melindungi makanan dari kontaminasi",
            "Mencegah kerusakan pada kabel dan sistem rumah"
        ],

        // 4: Basmi Nyamuk dan Kecoak
        [
            "Membasmi nyamuk dan kecoak secara efektif",
            "Mencegah penyakit yang dibawa nyamuk seperti DBD",
            "Menghilangkan sarang kecoak",
            "Membuat rumah anda lebih nyaman",
            "Aman untuk anak-anak dan hewan peliharaan",
            "Solusi jangka panjang untuk masalah hama"
        ],

        // 5: Paket Basmi Lalat
        [
            "Membasmi lalat di seluruh area rumah",
            "Mencegah penyebaran penyakit dari lalat",
            "Menjaga kebersihan dapur dan ruang makan",
            "Mengurangi risiko kontaminasi makanan",
            "Layanan dari teknisi yang profesional",
            "Menggunakan bahan yang ramah lingkungan"
        ],

        // 6: Basmi Kutu
        [
            "Membasmi kutu hingga ke telurnya",
            "Menghilangkan alergi akibat kutu",
            "Mencegah gigitan kutu dan masalah kulit",
            "Membuat kasur dan furnitur bebas kutu",
            "Menggunakan bahan yang aman untuk fabrik",
            "Teknisi khusus terlatih untuk penanganan kutu"
        ],

        // 7: Basmi Tawon/Lebah
        [
            "Menghilangkan sarang tawon/lebah dengan aman",
            "Mencegah sengatan berbahaya",
            "Penanganan oleh ahli yang terlatih",
            "Pencegahan pembentukan sarang baru",
            "Pemindahan sarang jika memungkinkan",
            "Perlindungan untuk keluarga anda"
        ],

        // 8: Fumigasi
        [
            "Membasmi semua jenis hama sekaligus",
            "Menjangkau area-area tersembunyi",
            "Solusi total untuk infestasi parah",
            "Membunuh hama di semua tahap kehidupan",
            "Mencegah kerusakan struktural pada bangunan",
            "Penanganan oleh tim fumigasi bersertifikasi"
        ],

        // 9: Desinfeksi
        [
            "Membunuh bakteri dan virus berbahaya",
            "Membersihkan permukaan dari mikroorganisme",
            "Mencegah penyebaran penyakit",
            "Menciptakan lingkungan yang sehat",
            "Menggunakan bahan desinfektan medis",
            "Cocok untuk rumah dan tempat usaha"
        ]
    ];

    // let manfaatLayananList = {
    //     'anti-rayap-imidaclorprid': 'Membunuh serangga yang ada di dalam pondasi'
    // }

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
                rincianLayananElement.textContent = rincianLayananList[index];

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
