<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Struktur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('struktur')->insert([
            'struktur' => '1601673710_struktur_blog-list-03.jpg',
            'status' => '1'
        ]);
    }
}
