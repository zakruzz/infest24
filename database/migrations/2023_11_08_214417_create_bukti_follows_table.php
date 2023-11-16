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
        Schema::create('bukti_follow', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(0);
            $table->unsignedBigInteger('participant_id')->default(0);
            $table->string('ss_infest')->nullable();
            $table->string('ss_ic')->nullable();
            $table->string('ss_sis')->nullable();
            $table->string('ss_milab')->nullable();
            $table->string('ss_instastory')->nullable();
            $table->string('ss_poster')->nullable();
            $table->string('ss_twibbon')->nullable();
            $table->string('link_drive')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('participant_id')
                ->references('id')
                ->on('participants')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_follows');
    }
};
