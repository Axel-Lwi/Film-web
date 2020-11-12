<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsiGenre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
        [
            'id' => '1',
            'name' => 'Drama'
        ],
        [
            'id' => '2',
            'name' => 'Kids'
        ],
        [
            'id' => '3',
            'name' => 'TV Show'
        ]
        ]); 
    }
}
