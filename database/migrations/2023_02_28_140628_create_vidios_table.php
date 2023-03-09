<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidios', function (Blueprint $table) {
            $table->id();
            $table->text('judul_vidio', 200);
            $table->string('slug_judul');
            $table->string('durasi');
            $table->foreignId('kategori_id');
            $table->string('slug_kategori',);
            $table->string('link_poto', 255);
            $table->string('link_vidio', 255);
            $table->string('tgl_upload', 255);
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
        Schema::dropIfExists('vidios');
    }
};
