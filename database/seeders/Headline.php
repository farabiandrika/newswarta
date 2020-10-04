<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Headline extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headline')->insert([
            'headline' => '8a2celona Menang Telak 3',
        ]);

        DB::table('headline')->insert([
            'headline' => 'Rodhian sabri di gerebek di hotel sabrina',
        ]);
    }
}
