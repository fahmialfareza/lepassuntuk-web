<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('location');
            $table->longText('map');
            $table->double('price', 20, 2);
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
        Schema::dropIfExists('villas');
    }
}
