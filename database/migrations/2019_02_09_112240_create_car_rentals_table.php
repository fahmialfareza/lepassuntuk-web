<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('brand');
            $table->string('type');
            $table->boolean('driver');
            $table->boolean('fuel');
            $table->double('price_12_hours', 20, 2)->nullable();
            $table->double('price_full_day', 20, 2);
            $table->double('extra_charge', 20, 2);
            $table->string('photo')->default('');
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
        Schema::dropIfExists('car_rentals');
    }
}
