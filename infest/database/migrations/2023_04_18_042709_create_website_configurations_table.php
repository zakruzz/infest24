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
        Schema::create('website_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('name_website');
            $table->string('email');
            $table->string('phone_number');
            $table->string('fax_number')->nullable();
            $table->longText('address');
            $table->longText('address_city');
            $table->longText('logo');
            $table->longText('logo_negative')->nullable();
            $table->longText('icon');
            $table->longText('icon_negative')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->enum('status', ['ACTIVE', 'MAINTENANCE'])->default('ACTIVE');
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
        Schema::dropIfExists('website_configurations');
    }
};
