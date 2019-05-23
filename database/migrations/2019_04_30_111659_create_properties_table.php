<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_title');
            $table->string('status');
            $table->string('type');
            $table->double('price', 10, 2);
            $table->string('area')->nullable();
            $table->string('rooms');
            $table->text('gallery');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('building_age')->nullable();
            $table->string('bed_rooms')->nullable();
            $table->string('bath_rooms')->nullable();
            $table->string('air_condition')->nullable();

            $table->string('swimming_pool')->nullable();
            $table->string('central_heating')->nullable();
            $table->string('laundry_room')->nullable();
            $table->string('gym')->nullable();
            $table->string('alarm')->nullable();
            $table->string('window_covering')->nullable();
            
            $table->string('owner_fullname');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->boolean('published')->default(0);
            $table->string('user_id');
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
        Schema::dropIfExists('properties');
    }
}
