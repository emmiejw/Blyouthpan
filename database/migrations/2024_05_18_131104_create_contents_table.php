<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('section_one')->nullable();
            $table->longText('section_two')->nullable();
            $table->longText('section_three')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_one_source')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_two_source')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_three_source')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
