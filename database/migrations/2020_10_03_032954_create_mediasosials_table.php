<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasosialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediasosial', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fb');
            $table->string('url_fb');
            $table->string('nama_tw');
            $table->string('url_tw');
            $table->string('nama_yt');
            $table->string('url_yt');
            $table->string('nama_ig');
            $table->string('url_ig');
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
        Schema::dropIfExists('mediasosials');
    }
}
