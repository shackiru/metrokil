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
                'name' => 'Shaquille Ditama Putra',
                'bio' => 'Magang BCA, Ex-PPTI 14',
                'review' => 'Terimakasih kepada Tim Metrokil, kerjanya sangat profesional, transparan kepada customer dan penjelasannya detail terkait layanan yang diberikan. Sukses selalu Metrokil!',
            ],
            [
                'name' => 'Aurelia Natasha',
                'bio' => 'Software Engineer, Ex-PPTI 12',
                'review' => 'Kerjasama dengan Tim Metrokil sangat memuaskan! Timnya responsif, detail, dan memastikan setiap kebutuhan saya terpenuhi. Metrokil adalah pilihan terbaik untuk layanan profesional!',
            ],
            [
                'name' => 'Jonathan Fajar',
                'bio' => 'Product Manager, Ex-PPTI 13',
                'review' => 'Metrokil memberikan pengalaman layanan yang luar biasa! Hasil kerja yang profesional dan tim yang sangat kooperatif. Tidak ragu untuk merekomendasikan mereka.',
            ],
            [
                'name' => 'Stephanie Wijaya',
                'bio' => 'Data Scientist, Ex-PPTI 15',
                'review' => 'Kerja sama dengan Metrokil sangat mengesankan. Pelayanan cepat, transparan, dan sangat profesional. Tim mereka benar-benar tahu cara memenuhi ekspektasi pelanggan.',
            ],
            [
                'name' => 'Kevin Pratama',
                'bio' => 'UX Designer, Ex-PPTI 16',
                'review' => 'Pengalaman saya dengan Metrokil sangat positif. Timnya sangat profesional dan selalu siap membantu. Saya merasa dihargai sebagai pelanggan.',
            ],
            [
                'name' => 'Cindy Lestari',
                'bio' => 'Marketing Specialist, Ex-PPTI 17',
                'review' => 'Metrokil adalah pilihan yang tepat untuk layanan pest control. Timnya sangat profesional dan hasil kerjanya memuaskan. Terima kasih Metrokil!',
            ],
        ];

        Testimonial::insert($testimonials);
    }
}
