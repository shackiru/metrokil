<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $users = [
            [
                'name' => 'Anti Rayap Imidaclorprid (Import)',
                'price' => '35000',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode drill injection dan power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Garansi 4 Tahun, bebas klaim dan gratis kontrol tiap tahun selama masa garansi. Perhitungan luas hanya dilakukan pada bidang horizontal. Namun, layanan termasuk semua bidang vertikal dan furnitur di atasnya. Minimum transaksi Rp. 2.500.000,-',
            ],
            [
                'name' => 'Anti Rayap Imidaclorprid (Lokal)',
                'price' => '30000',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode drill injection dan power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Garansi 3 Tahun, bebas klaim dan gratis kontrol tiap tahun selama masa garansi. Perhitungan luas hanya dilakukan pada bidang horizontal. Namun, layanan termasuk semua bidang vertikal dan furnitur di atasnya. Minimum transaksi Rp. 2.500.000,-',
            ],
            [
                'name' => 'Anti Rayap Cypermethrin (Lokal)',
                'price' => '25000',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode drill injection dan power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Garansi 2 Tahun, bebas klaim dan gratis kontrol tiap tahun selama masa garansi. Perhitungan luas hanya dilakukan pada bidang horizontal. Namun, layanan termasuk semua bidang vertikal dan furnitur di atasnya. Minimum transaksi Rp. 2.500.000,-',
            ],
            [
                'name' => 'Paket Pengendalian Hama Tikus',
                'price' => '1750000',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode perangkap hidup, perangkap mati, dan racun. Kebersihan pasca treatment menjadi tanggung jawab kami. Kontrol dan tindakan tiap minggu sekali selama masa layanan. Perhitungan luas hanya dilakukan pada bidang horizontal. Namun, layanan termasuk semua bidang vertikal dan furnitur di atasnya. Minimum layanan 3 bulan.',
            ],
            [
                'name' => 'Basmi Nyamuk dan Kecoak',
                'price' => '1300',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode ultra low volume cold fogging dan fogging asap/kabut. Kebersihan pasca treatment menjadi tanggung jawab kami. Perhitungan luas hanya dilakukan pada bidang horizontal. Namun, layanan termasuk semua bidang vertikal dan furnitur di atasnya. Minimum transaksi Rp. 2.500.000,-',
            ],
            [
                'name' => 'Paket Basmi Lalat',
                'price' => '0',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode insect fly catcher. Kebersihan pasca treatment menjadi tanggung jawab kami. Hubungi admin kami untuk mendapatkan perhitungan dan penawarannya.',
            ],
            [
                'name' => 'Basmi Kutu',
                'price' => '0',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Hubungi admin kami untuk mendapatkan perhitungan dan penawarannya.',
            ],
            [
                'name' => 'Basmi Tawon/Lebah',
                'price' => '0',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Hubungi admin kami untuk mendapatkan perhitungan dan penawarannya.',
            ],
            [
                'name' => 'Fumigasi',
                'price' => '0',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode fumigasi. Kebersihan pasca treatment menjadi tanggung jawab kami. Hubungi admin kami untuk mendapatkan perhitungan dan penawarannya.',
            ],
            [
                'name' => 'Desinfeksi',
                'price' => '0',
                'benefits' => 'admin',
                'description' => 'Menggunakan metode power spraying. Kebersihan pasca treatment menjadi tanggung jawab kami. Hubungi admin kami untuk mendapatkan perhitungan dan penawarannya.',
            ],
        ];

    DB::table('services')->insert($users);
    }
}
