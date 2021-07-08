<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cabinets_layout_id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->string('image_url')->nullable();
            $table->unsignedInteger('amount')->default(0);
            $table->unsignedBigInteger('expired_at'); //timestamp
            $table->timestamps();

            $table->index(['cabinets_layout_id', 'category_id', 'expired_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
