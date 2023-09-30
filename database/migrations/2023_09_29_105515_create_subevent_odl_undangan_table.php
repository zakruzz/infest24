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
        Schema::create('subevent_odl_undangan', function (Blueprint $table) {
            $table->id();
            $table->longText('nama');
            $table->longText('no_wa');
            $table->string('asal_sekolah');
            $table->string('nama_guru');
            $table->string('wa_guru');
            $table->string('image_ig');
            $table->string('image_ic');
            $table->string('image_sis');
            $table->string('image_milab');
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
        Schema::dropIfExists('subevent_odl_undangan');
    }
};
