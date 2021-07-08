<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinetsLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinets_layout', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cabinets_id');
            $table->string('name');
            $table->unsignedInteger('x_axis');
            $table->unsignedInteger('y_axis');
            $table->timestamps();

            $table->index('cabinets_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabinets_layout');
    }
}
