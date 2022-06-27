<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pricings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id');
            $table->integer('price'); // Harga Jual Konsumen
            $table->json('price_levels')->nullable(); // Harga Jual ke Partner
            $table->enum('price_is', ['inc. tax', 'exc. tax']);
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
        Schema::dropIfExists('item_pricings');
    }
};
