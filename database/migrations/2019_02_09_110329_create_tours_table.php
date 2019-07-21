<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('destination_id');
            $table->string('name');
            $table->longText('description');
            $table->string('location');
            $table->integer('durations');
            $table->longText('facilities');
            $table->longText('notes');
            $table->longText('itinerary');
            $table->integer('viewed')->default(0);
            $table->integer('review')->default(0);
            $table->integer('rating')->default(0);
            $table->string('main_photo')->default('');
            $table->string('photo1')->default('');
            $table->string('photo2')->default('');
            $table->string('photo3')->default('');
            $table->string('photo4')->default('');
            $table->string('photo5')->default('');
            $table->string('photo6')->default('');
            $table->string('photo7')->default('');
            $table->string('photo8')->default('');
            $table->string('photo9')->default('');
            $table->longText('map');
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
        Schema::dropIfExists('tours');
    }
}
