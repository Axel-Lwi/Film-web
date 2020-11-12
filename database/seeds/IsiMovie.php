<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsiMovie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
            'id' => '1',
            'genre_id' => '1',
            'title' => 'Hotel Del Luna',
            'photo' => 'pic1.jpg',
            'description' => 'Petualangan misterius antara pemilik hotel roh dengan manager barunya.',
            'rating' => '5'
        ],
        [
            'id' => '2',
            'genre_id' => '1',
            'title' => 'Extracurricular',
            'photo' => 'pic2.jpg',
            'description' => 'melihat bagaimana seorang anak mengatur usaha gelapnya.',
            'rating' => '4'
        ],
        [
            'id' => '3',
            'genre_id' => '1',
            'title'=> 'Itaewon Class',
            'photo' => 'pic3.jpg',
            'description' => 'Perjuangan seorang anak dalam sekolah yang dihadapinya.',
            'rating' => '5'
        ],
        [
            'id' => '4',
            'genre_id' => '1',
            'title'=> 'Vagabond',
            'photo' => 'pic4.jpg',
            'description' => 'Melihat penyelidikan dari detektif terkenal dari kasus misterius.',
            'rating' => '4'
        ],
        [
            'id' => '5',
            'genre_id' => '2',
            'title'=> 'Upin dan Ipin',
            'photo' => 'pic5.jpg',
            'description' => 'Belajar kehidupan dari si kembar yang lucu.',
            'rating' => '3'
        ],
        [
            'id' => '6',
            'genre_id' => '2',
            'title'=> 'Legend of Aang',
            'photo' => 'pic6.jpg',
            'description' => 'Menceritakan kisah Avatar menyeimbangkan kekuatan 4 negara.',
            'rating' => '5'
        ],
        [
            'id' => '7',
            'genre_id' => '2',
            'title'=> 'Dragon ball',
            'photo' => 'pic7.jpg',
            'description' => 'Petualangan seru mengumpulkan bola naga untuk mendapatkan keinginan terbesar.',
            'rating' => '4'
        ],
        [
            'id' => '8',
            'genre_id' => '2',
            'title'=> 'Ben10',
            'photo' => 'pic8.jpg',
            'description' => 'Kehidupan anak ini berubah setelah menemukan jam alien saat liburan sekolah',
            'rating' => '5'
        ],
        [
            'id' => '9',
            'genre_id' => '3',
            'title'=> 'Stranger things',
            'photo' => 'pic9.jpg',
            'description' => 'Dunia tiba - tiba diserang oleh virus tak dikenal yang sangat mematikan.',
            'rating' => '2'
        ],
        [
            'id' => '10',
            'genre_id' => '3',
            'title'=> 'The Mandalorian',
            'photo' => 'pic10.jpg',
            'description' => 'Kisah seorang pembunuh bayaran mengelilingi galaksi untuk mencari jati diri.',
            'rating' => '3'
        ],
        [
            'id' => '11',
            'genre_id' => '3',
            'title'=> 'doctor strange',
            'photo' => 'pic11.jpg',
            'description' => 'kisah seorang dokter yang bosan dengan pekerjaannya dan ingin mencari makna baru dalam hidup.',
            'rating' => '2'
        ],
        [
            'id' => '12',
            'genre_id' => '3',
            'title'=> 'Camp cretaceous',
            'photo' => 'pic12.jpg',
            'description' => 'lanjutan dari jurassic park, bagaimana nasib dunia setelah dinosaurus lepas dari habitat aslinya?',
            'rating' => '5'
        ]
        ]); 
    }
}
