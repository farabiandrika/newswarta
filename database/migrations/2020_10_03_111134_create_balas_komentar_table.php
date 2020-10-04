<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalasKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balas_komentar', function (Blueprint $table) {
            $table->id();
            $table->text('isi_komentar');
            $table->string('nama');
            $table->string('email');
            $table->string('user_id')->nullable(); //Foreign Key
            $table->string('komentar_id'); //Foreign Key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balas_komentar');
    }
}
