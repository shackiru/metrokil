<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Reza Ilham',
                'bio' => 'Profesional, Green Land 2 Jati Kramat Kota Bekasi',
                'review' => 'Terima Kasih kepada Tim Metrokil, kerjanya sangat profesional, transparan kepada customer dan penjelasannya detail terkait layanan yang diberikan. Sukses terus Metrokil!',
            ],
            [
                'name' => 'YPI Al Azhar',
                'bio' => 'Lembaga Pendidikan Islam Terbesar',
                'review' => 'Terbukti ampuh untuk rayap dan semut, saya sudah berlangganan 4 tahun alhamdulillah gudang kami aman dari rayap dan semut.',
            ],
            [
                'name' => 'Nova',
                'bio' => 'Profesional, Premier Estate 2 Kota Bekasi',
                'review' => 'Pekerjaan baik, pelayanan bagus, mau mendengarkan customer, profesional dan rekomend untuk permasalahan rayap dirumah.',
            ],
            [
                'name' => 'Susan Lie',
                'bio' => 'Bankir, Citra Garden Puri Jakarta Barat',
                'review' => 'Saya merupakan customer metrokil dan sangat puas karena metrokil selalu mencoba memberikan yang terbaik. Pengerjaan rapi. Harga yang penting, ga nguras kantong hehehee.',
            ],
            [
                'name' => 'Theo John Santoso',
                'bio' => 'Profesional, Sumarecon Serpong',
                'review' => 'Anti rayap Metrokil sangat mengutamakan after sales service yang profesional dan selalu memberi masukan yang baik bagi para customer nya sehingga kebutuhan anti rayap sesuai dengan realnya, semoga selalu dipertahankan kinerja team2 nya dan semakin maju dan jaya selalu Metrokil.',
            ],
            [
                'name' => 'Kevin',
                'bio' => 'Arsitek/Kontraktor, Citra Garden Puri Jakarta Barat',
                'review' => 'Pelayanan dan pekerjaan metrokill sangat bagus, dan kita akan terus dibantu selama 4 tahun kedepan dengan follow up dari team metrokil.',
            ],
            [
                'name' => 'Agus Tambunan',
                'bio' => 'Profesional, Tebet Jakarta Selatan',
                'review' => 'Good service and profesional.',
            ],
            [
                'name' => 'Tonny J Kusnanto',
                'bio' => 'Profesional, BSD City',
                'review' => 'Sangat senang dengan service dari metrokil untuk penanganan rayap di rumah kami; pengerjaan yang rapi dan bersih; staff yang berpengalaman dan profesional dengan detail menjelaskan tentang rayap. Recommended dan maju terus untuk metrokil.',
            ],
            [
                'name' => 'Alfonsus Bambang Sumadi',
                'bio' => 'Kontraktor Properti, BSD City',
                'review' => 'Metrokil partner kepercayaan Saya dalam mengatasi gangguan rayap, tikus, serangga bahkan yang terakhir serangan kutu busuk di property milik klien-klien Saya. Ketika Metrokil bekerja maka Saya merasa pasti, bahwa masalah teratasi tuntas. Sejauh ini Metrokil belum pernah mengecewakan tugas yang Saya berikan kepadanya. Rekomen dah...',
            ],
            [
                'name' => 'Thomas',
                'bio' => 'Profesional, Metro Permata Kota Tangerang',
                'review' => 'Kami puas dengan products Anti Rayap dan pelayanan purna jual dari pak Sutrisno. Semoga sukses selalu di waktu mendatang.',
            ],
        ];

        Testimonial::insert($testimonials);
    }
}
