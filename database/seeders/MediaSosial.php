<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MediaSosial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mediasosial')->insert([
            'nama_fb' => 'wartakriminalnusantara',
            'url_fb' => 'https://facebook.com',
            'nama_tw' => '@warta_kriminal_nusantara',
            'url_tw' => 'https://twitter.com',
            'nama_yt' => 'wartakriminalnusantara',
            'url_yt' => 'https://youtube.com',
            'nama_ig' => '@warta_kriminalnusantara',
            'url_ig' => 'https://instagram.com'
        ]);
    }
}
