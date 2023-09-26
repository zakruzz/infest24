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
        Schema::create('subevents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("event_id")->default(0);
            $table->string("name");
            $table->string("slug");
            $table->longText("desc");
            $table->longText("guide_book");
            $table->longText("poster");
            $table->longText("logo");
            $table->longText("background");
            $table->timestamp("regist_open")->nullable();
            $table->timestamp("regist_close")->nullable();
            $table->timestamps();

            $table->foreign('event_id')
                        ->references('id')
                        ->on('events')
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
        Schema::dropIfExists('subevents');
    }
};
