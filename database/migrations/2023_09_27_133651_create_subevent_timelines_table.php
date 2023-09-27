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
        Schema::create('subevent_timelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subevent_id')->default(0);
            $table->string('name');
            $table->string('desc');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();

            $table->foreign("subevent_id")
                ->references("id")
                ->on("subevents")
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
        Schema::dropIfExists('subevent_timelines');
    }
};
