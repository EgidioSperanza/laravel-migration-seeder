<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_travel', function (Blueprint $table) {
            $table->id();
            $table->string('travel_pack_name', 100);
            $table->string('departure', 100);
            $table->string('duration', 20);
            $table->string('hotel', 50);
            $table->string('hotel_address', 100);
            $table->tinyInteger('hotel_stars');
            $table->text('description');
            $table->unsignedDecimal('price', 8, 2);
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
        Schema::dropIfExists('pack_travel');
    }
}
