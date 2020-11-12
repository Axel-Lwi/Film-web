<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsiEpisode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
        [
            'movie_id' => '1',
            'episode' => '1',
            'title' => 'Pertemuan dengan takdir'
        ],
        [
            'movie_id' => '1',
            'episode' => '2',
            'title' => 'Hujan yang lebat'
        ],
        [
            'movie_id' => '1',
            'episode' => '3',
            'title' => 'Keinginan yang tak terpenuhi'
        ],
        [
            'movie_id' => '1',
            'episode' => '4',
            'title' => 'Akhir yang menunggu'
        ],
        [
            'movie_id' => '1',
            'episode' => '5',
            'title' => 'Takdir yang dijalankan'
        ],
        [
            'movie_id' => '2',
            'episode' => '1',
            'title' => 'Awal yang baru'
        ],
        [
            'movie_id' => '2',
            'episode' => '2',
            'title' => 'Yang kusesali'
        ],
        [
            'movie_id' => '2',
            'episode' => '3',
            'title' => 'Partner Baru dalam usaha'
        ],
        [
            'movie_id' => '2',
            'episode' => '4',
            'title' => 'Masalah yang rumit'
        ],
        [
            'movie_id' => '3',
            'episode' => '1',
            'title' => 'Apa kabar?'
        ],
        [
            'movie_id' => '3',
            'episode' => '2',
            'title' => 'Teman yang aneh, tidak apa kan?'
        ],
        [
            'movie_id' => '3',
            'episode' => '3',
            'title' => 'Kesepakatan yang menentukan'
        ],
        [
            'movie_id' => '3',
            'episode' => '4',
            'title' => 'Bukan yang terakhir'
        ],
        [
            'movie_id' => '3',
            'episode' => '5',
            'title' => 'Tim yang terpilih'
        ],
        [
            'movie_id' => '3',
            'episode' => '6',
            'title' => 'pembimbing terbaik'
        ],
        [
            'movie_id' => '3',
            'episode' => '7',
            'title' => 'Sayonara'
        ],
        [
            'movie_id' => '4',
            'episode' => '1',
            'title' => 'Akulah yang terbaik'
        ],
        [
            'movie_id' => '4',
            'episode' => '2',
            'title' => 'Petunjuk pertama'
        ],
        [
            'movie_id' => '4',
            'episode' => '3',
            'title' => 'Masalah yang lebih dalam'
        ],
        [
            'movie_id' => '4',
            'episode' => '4',
            'title' => 'Pelaku yang sebenarnya'
        ],
        [
            'movie_id' => '4',
            'episode' => '5',
            'title' => 'Keadilan yang dipertanyakan'
        ],
        [
            'movie_id' => '5',
            'episode' => '1',
            'title' => 'Namaku Upin, dan ini Ipin'
        ],
        [
            'movie_id' => '5',
            'episode' => '2',
            'title' => 'Kak ros yang baik'
        ],
        [
            'movie_id' => '5',
            'episode' => '3',
            'title' => 'Tuk Dalang yang lucu'
        ],
        [
            'movie_id' => '5',
            'episode' => '4',
            'title' => '2 ringgit Mail'
        ],
        [
            'movie_id' => '6',
            'episode' => '1',
            'title' => 'Avatar yang sebenarnya'
        ],
        [
            'movie_id' => '6',
            'episode' => '2',
            'title' => 'Mulai dari Selatan'
        ],
        [
            'movie_id' => '6',
            'episode' => '3',
            'title' => 'invasi yang ditakdirkan'
        ],
        [
            'movie_id' => '6',
            'episode' => '3',
            'title' => 'Kembalinya Avatar'
        ],
        [
            'movie_id' => '6',
            'episode' => '4',
            'title' => 'Nostalgia sang avatar'
        ],
        [
            'movie_id' => '6',
            'episode' => '5',
            'title' => 'Rahasia avatar'
        ],
        [
            'movie_id' => '6',
            'episode' => '6',
            'title' => 'yang terakhir'
        ],
        [
            'movie_id' => '7',
            'episode' => '1',
            'title' => 'bola pertama'
        ],
        [
            'movie_id' => '7',
            'episode' => '2',
            'title' => 'kedua pun didapat'
        ],
        [
            'movie_id' => '7',
            'episode' => '3',
            'title' => 'ternyata ada 3'
        ],
        [
            'movie_id' => '7',
            'episode' => '4',
            'title' => '4 dari 7'
        ],
        [
            'movie_id' => '7',
            'episode' => '5',
            'title' => 'semua pun didapat'
        ],
        [
            'movie_id' => '8',
            'episode' => '1',
            'title' => 'Musim panas dimulai'
        ],
        [
            'movie_id' => '8',
            'episode' => '2',
            'title' => 'Cerita kakekku'
        ],
        [
            'movie_id' => '8',
            'episode' => '3',
            'title' => 'bertemu sepupu'
        ],
        [
            'movie_id' => '8',
            'episode' => '3',
            'title' => 'makhluk aneh di mall'
        ],
        [
            'movie_id' => '8',
            'episode' => '4',
            'title' => 'hai Kevin'
        ],
        [
            'movie_id' => '8',
            'episode' => '5',
            'title' => 'Cerita Kevin'
        ],
        [
            'movie_id' => '8',
            'episode' => '6',
            'title' => 'Kevin sudah berubah'
        ],
        [
            'movie_id' => '8',
            'episode' => '7',
            'title' => 'Jamnya hilang'
        ],
        [
            'movie_id' => '9',
            'episode' => '1',
            'title' => 'Kehadiran virus'
        ],
        [
            'movie_id' => '9',
            'episode' => '2',
            'title' => 'mengatasi virus'
        ],
        [
            'movie_id' => '9',
            'episode' => '3',
            'title' => 'Setelah semua sehat'
        ],
        [
            'movie_id' => '10',
            'episode' => '1',
            'title' => 'sejarah mandalor'
        ],
        [
            'movie_id' => '10',
            'episode' => '2',
            'title' => 'tujuan mandalor'
        ],
        [
            'movie_id' => '11',
            'episode' => '1',
            'title' => 'keseharian dokter'
        ],
        [
            'movie_id' => '11',
            'episode' => '2',
            'title' => 'Arti hidup'
        ],
        [
            'movie_id' => '11',
            'episode' => '3',
            'title' => 'yang diinginkan'
        ],
        [
            'movie_id' => '11',
            'episode' => '4',
            'title' => 'yang sebenarnya'
        ],
        [
            'movie_id' => '12',
            'episode' => '1',
            'title' => 'Setelah jurassic park'
        ],
        [
            'movie_id' => '12',
            'episode' => '2',
            'title' => 'di yellowstone'
        ],
        [
            'movie_id' => '12',
            'episode' => '3',
            'title' => 'outbreak'
        ],
        [
            'movie_id' => '12',
            'episode' => '4',
            'title' => 'munculnya si putih'
        ]
        ]);
    }
}
