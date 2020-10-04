<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tentang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentang')->insert([
            'tentang' => 'Pancasila adalah pilar ideologis negara Indonesia. Nama ini terdiri dari dua kata dari Sanskerta: pañca berarti lima dan śīla berarti prinsip atau asas. Pancasila merupakan rumusan dan pedoman kehidupan berbangsa dan bernegara bagi seluruh rakyat Indonesia raya.
            Lima ideologi utama penyusun Pancasila adalah Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia, dan tercantum pada alinea ke-4 Preambule (Pembukaan) Undang-Undang Dasar 1945.
            Sekalipun terjadi perubahan isi dan urutan lima sila Pancasila yang berlangsung dalam beberapa tahap selama masa perumusan Pancasila pada tahun 1945, tanggal 1 Juni diperingati bersama sebagai hari lahirnya Pancasila.'
        ]);
    }
}
