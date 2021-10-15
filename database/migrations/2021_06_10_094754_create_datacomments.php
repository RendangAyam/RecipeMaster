<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatacomments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food_name');
            $table->string('food_body_ingredient');
            $table->string('food_body_steps');
            $table->string('food_img');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drink_name');
            $table->string('drink_body_ingredient');
            $table->string('drink_body_steps');
            $table->string('drink_img');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('food_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
        Schema::dropIfExists('drinks');
        Schema::dropIfExists('comments');
    }
}
