<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'nama_role' => 'Super Admin',
        ]);

        DB::table('role')->insert([
            'nama_role' => 'Admin',
        ]);

        DB::table('role')->insert([
            'nama_role' => 'Editor',
        ]);
    }
}
