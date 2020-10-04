<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Logo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logo')->insert([
            'logo' => '1601673278_logo_images.png',
            'status' => '1'
        ]);
    }
}
