<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Jurusan::factory(10)->create();
        // Category::factory(10)->create();
        // Prodi::factory(10)->create();
        Member::factory(10)->create();
        Job::factory(10)->create();
        // MatkulAsjk::factory(10)->create();

        // ini untuk default kategori
        // Category::create([
        //     'kategori_buku' => 'Mata Kuliah'
        // ]);
        // Category::create([
        //     'kategori_buku' => 'Referensi'
        // ]);
        // Category::create([
        //     'kategori_buku' => 'Laporan On The Job Training'
        // ]);
        // Category::create([
        //     'kategori_buku' => 'Laporan Tugas Akhir'
        // ]);

        // ini untuk default prodi
        // Prodi::create([
        //     'prodi' => 'Administrasi Server dan Jaringan Komputer'
        // ]);
        // Prodi::create([
        //     'prodi' => 'Otomasi Perkantoran'
        // ]);
        // Prodi::create([
        //     'prodi' => 'Penyuntingan Audio dan Video'
        // ]);
        // Prodi::create([
        //     'prodi' => 'Pengolahan Hasil Ternak Unggas'
        // ]);
    }
}
