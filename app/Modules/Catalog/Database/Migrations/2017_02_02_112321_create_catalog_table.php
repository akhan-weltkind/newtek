<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function(Blueprint $table) {
            // These columns are needed for Baum's Nested Set implementation to work.
            // Column names may be changed, but they *must* all exist and be modified
            // in the model.
            // Take a look at the model scaffold comments for details.
            // We add indexes on parent_id, lft, rgt columns by default.
            $table->increments('id');
            $table->enum('lang', ['ru', 'en']);
            $table->integer('category_id');
            $table->timestamp('date');
            $table->string('code');
            $table->string('title');
            $table->text('preview');
            $table->text('content');
            $table->string('image');
            $table->string('size');
            $table->string('power');
            $table->text('electrical');
            $table->tinyInteger('electrical_active');
            $table->text('technical');
            $table->tinyInteger('technical_active');

            $table->string('meta_title');
            $table->string('meta_h1');
            $table->text('meta_keywords');
            $table->text('meta_description');

            $table->timestamps();



            // Add needed columns here (f.ex: name, slug, path, etc.)
            // $table->string('name', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catalog');
    }
}
