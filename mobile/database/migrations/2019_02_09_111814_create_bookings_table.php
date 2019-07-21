<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id');
            $table->integer('tours_meta_id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('phone_number');
            $table->date('date');
            $table->string('address');
            $table->string('id_line')->nullable();
            $table->string('id_instagram')->nullable();
            $table->string('pickup_address')->nullable();
            $table->string('email');
            $table->integer('shuttle')->default(0);
            $table->integer('unique_code');
            $table->double('price_total', 20, 2);
            $table->boolean('confirmation')->nullable();
            $table->datetime('expired')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE bookings AUTO_INCREMENT = 12345;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
