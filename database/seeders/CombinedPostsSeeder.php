<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CombinedPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Data koleksi_post (maksimal 3)
        $koleksi_posts = [
            [
                'title' => 'Mahkota Sultan Siak',
                'image' => 'posts/mahkota.png',
                'category' => 'koleksi_post',
                'description' => 'lambang kekuasaan dan kejayaan Melayu.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Cermin Kristal Ratu Austria',
                'image' => 'posts/cermin.jpg',
                'category' => 'koleksi_post',
                'description' => 'salah satu koleksi paling menarik di Istana Siak Sri Indrapura.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Baju Rompi',
                'image' => 'posts/rompi.jpg',
                'category' => 'koleksi_post',
                'description' => 'dikenal sebagai rompi kebal (anti peluru).',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Data todo_post (maksimal 3)
        $todo_posts = [
            [
                'title' => 'Jembatan Tengku Agung Sultanah',
                'image' => 'posts/Jembatan.jpg',
                'category' => 'todo_post',
                'description' => 'Jembatan ini menjadi ikon modern Kota Siak. Bentuknya megah dan pada malam hari dihiasi lampu warna-warni.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Masjid Raya Syahabuddin',
                'image' => 'posts/mesjid.jpg',
                'category' => 'todo_post',
                'description' => 'Masjid tertua di Siak yang masih berdiri kokoh hingga kini. Selain tempat ibadah, masjid ini juga menjadi bagian penting dari sejarah perkembangan Islam di Riau.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Kursi Singgana Kerajaan',
                'image' => 'posts/kursi.jpeg',
                'category' => 'todo_post',
                'description' => 'Kursi ini melambangkan kemegahan dan legitimasi kekuasaan Sultan Siak.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Data wisata (maksimal 3)
        $wisatas = [
            [
                'title' => 'Mesjid Raya An-Nur, Kota Pekanbaru',
                'image' => 'posts/poto1.webp',
                'category' => 'wisata',
                'description' => 'Masjid megah di pusat kota Pekanbaru dengan arsitektur modern yang memukau.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Candi Muara Takus, Kabupaten Kampar',
                'image' => 'posts/poto2.webp',
                'category' => 'wisata',
                'description' => 'Situs candi Buddha bersejarah yang merupakan peninggalan Kerajaan Sriwijaya.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Ulu Kasok, Kabupaten Kampar Riau',
                'image' => 'posts/kasok.jpg',
                'category' => 'wisata',
                'description' => 'Destinasi wisata alam dengan pemandangan yang menakjubkan dan udara yang sejuk.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Gabungkan semua data
        $all_posts = array_merge($koleksi_posts, $todo_posts, $wisatas);

        // Insert semua data ke tabel main
        DB::table('mains')->insert($all_posts);

        $this->command->info('Combined posts seeder completed successfully!');
        $this->command->info('- Inserted ' . count($all_posts) . ' posts total to main table');
        $this->command->info('  - ' . count($koleksi_posts) . ' koleksi_post records');
        $this->command->info('  - ' . count($todo_posts) . ' todo_post records');
        $this->command->info('  - ' . count($wisatas) . ' wisata records');
    }
}
