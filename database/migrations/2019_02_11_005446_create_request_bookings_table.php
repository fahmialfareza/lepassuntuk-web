<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_bookings', function (Blueprint $table) {
            $table->increments('id', 12345);
            $table->integer('user_id');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->date('depart');
            $table->date('return');
            $table->double('budget', 20, 2);
            $table->integer('passanger');
            $table->longText('detail');
            $table->boolean('replied')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE request_bookings AUTO_INCREMENT = 12345;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_bookings');
    }
}
