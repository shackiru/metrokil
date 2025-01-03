<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Cara Efektif Mengusir Tikus di Rumah',
                'description' => 'Tikus adalah salah satu hama yang paling sering ditemukan di rumah. Dalam artikel ini, kami membagikan tips efektif untuk mengusir tikus, mulai dari penggunaan perangkap hingga bahan alami seperti daun mint.',
                'user_id' => 1,
                'category' => 'news',
                'image_url' => 'https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bahaya Kecoa dan Cara Pencegahannya',
                'description' => 'Kecoa tidak hanya menjijikkan, tetapi juga dapat membawa berbagai penyakit. Simak panduan lengkap tentang bagaimana mencegah infestasi kecoa di rumah Anda.',
                'user_id' => 2,
                'category' => 'information',
                'image_url' => 'https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Layanan Pengendalian Hama Terbaik di Kota Anda',
                'description' => 'Kami menawarkan layanan pengendalian hama profesional yang siap membantu Anda mengatasi masalah hama dengan cepat dan aman. Hubungi kami untuk konsultasi gratis.',
                'user_id' => 1,
                'category' => 'news',
                'image_url' => 'https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mengatasi Infestasi Semut dengan Bahan Alami',
                'description' => 'Semut seringkali menjadi masalah di dapur dan area makan. Pelajari cara mengatasi infestasi semut dengan bahan-bahan alami yang aman untuk keluarga Anda.',
                'user_id' => 1,
                'category' => 'information',
                'image_url' => 'https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mengapa Penyemprotan Nyamuk Perlu Dilakukan Secara Rutin?',
                'description' => 'Nyamuk adalah penyebab utama berbagai penyakit seperti demam berdarah dan malaria. Penyemprotan nyamuk secara rutin adalah langkah penting untuk melindungi keluarga Anda.',
                'user_id' => 2,
                'category' => 'information',
                'image_url' => 'https://imgs.search.brave.com/MBt_dnud49bX710Y3LVo7B6LsuGZsFnKTC0wdWrqsKc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzcwLzIzLzQ0/LzM2MF9GXzM3MDIz/NDQ5Ml9SVXBtNTBz/dmZmbm92RHRQNjdP/dDJNbnF6TkRvSGtz/Wi5qcGc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('blogs')->insert($blogs);
    }
}
