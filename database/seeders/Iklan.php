<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Iklan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iklan')->insert([
            'banner' => '1601665577_iklan3_banner-01.jpg',
            'url' => 'https://facebook.com',
            'status' => '3'
        ]);

        DB::table('iklan')->insert([
            'banner' => '1601669813_iklan1_iklan4.jpg',
            'url' => 'https://youtube.com',
            'status' => '1'
        ]);

        DB::table('iklan')->insert([
            'banner' => '1601671320_iklan2_banner-02.jpg',
            'url' => 'https://instagram.com',
            'status' => '2'
        ]);
    }
}
