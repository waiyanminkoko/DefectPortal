<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('accomodation');
            $table->string('hall_location');
            $table->integer('floor');
            $table->string('cluster');
            $table->integer('room');
            $table->string('fault');
            $table->mediumText('description');
            $table->mediumText('remarks');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defects');
    }
};
