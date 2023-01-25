<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name', 100)->nullable()->unique();
            $table->string('email', 100)->nullable()->unique();
            $table->string('password', 100)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->text('user_image_link')->nullable();
            $table->string('user_description', 100)->nullable();
            $table->string('user_facebook_link', 100)->nullable();
            $table->string('user_youtube_link', 100)->nullable();
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
