<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigincrements('property_id');
            $table->string('proprty_type');
            $table->string('proprty_address');
            $table->integer('no_of_bedrooms');
            $table->integer('no_of_bathrooms');
            $table->float('area_size');
            $table->string('proprty_name');
            $table->float('proprty_price');
            $table->text('image_link');
            $table->text('proprty_description');
            $table->boolean('property_status')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
