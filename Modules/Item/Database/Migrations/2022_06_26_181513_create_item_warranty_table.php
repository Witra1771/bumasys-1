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
        Schema::create('item_warranties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('duration')->nullable();
            $table->enum('duration_type', ['Days', 'Months', 'Years'])->nullable();
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
        Schema::dropIfExists('item_warranty');
    }
};
