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
        Schema::create('subevent_regist_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("subevent_id")->default(0);
            $table->unsignedBigInteger("participant_id")->default(0);
            $table->timestamps();

            $table->foreign("subevent_id")
                ->on("subevents")
                ->references("id")
                ->onDelete("cascade");
            
            $table->foreign("participant_id")
                ->on("participants")
                ->references("id")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subevent_regist_participants');
    }
};
