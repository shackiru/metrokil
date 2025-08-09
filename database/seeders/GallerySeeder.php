<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'name' => 'Penyuntikan Anti Rayap Kusen Jendela',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Penyuntikan Anti Rayap Kusen Pintu',
                'category' => 'Pembas',
                'description' => 'Telah dipercaya oleh banyak developer perumahan',
                'image_url' => 'galleries/p2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyuntikan Anti Rayap Dinding Keramik Kamar Mandi',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada rumah dari CEO perusahaan ternama.',
                'image_url' => 'galleries/p3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyuntikan Anti Rayap Lantai Dasar  ',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Lubang Penyuntikan Anti Rayap Sebelum Ditambal',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Lubang Penyuntikan Anti Rayap Setelah Ditambal',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyuntikan Anti Rayap Kusen Jendela',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyemprotan Anti Rayap Plafon Gypsum',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyemprotan Anti Rayap Panel Kayu',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
            [
                'name' => 'Penyemprotan Anti Rayap Taman',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],        
            [
                'name' => 'Penyemprotan Anti Rayap Rangka Atap',
                'category' => 'Layanan Anti Rayap',
                'description' => 'Dilakukan pada perumahan baru yang belum ditempati.',
                'image_url' => 'galleries/p12.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('galleries')->insert($galleries);
    }
}
