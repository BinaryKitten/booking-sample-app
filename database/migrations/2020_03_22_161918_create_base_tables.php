<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create('teachers', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->text('profile');
            $table->timestamps();
        });

        Schema::create('courses', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->text('description');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('price');
            $table->integer('discounted_price')->default(0);
            $table->unsignedTinyInteger('spaces');
            $table->text('objectives');
            $table->text('eligibility');
            $table->foreignId('teacher_id')->references('id')->on('teachers');
            $table->timestamps();
        });

        Schema::create('lessons', static function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->text('description');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('courses');
    }
}
