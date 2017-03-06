<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('lang',['ru','en']);

            $table->text('title');
            $table->string('title_color');
            $table->string('background_button');
            $table->string('color_button');

            $table->text('preview');

            $table->string('link');
            $table->enum('link_type',['in','out']);

            $table->string('main_image');
            $table->string('background_image');

            $table->integer('priority');
            $table->tinyInteger('active');
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
        Schema::drop('slider');
    }
}
