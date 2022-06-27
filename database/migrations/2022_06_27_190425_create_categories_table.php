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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_system')->default(false);
            $table->bigInteger('company_id');
            $table->string('slug');
            $table->string('name');
            $table->enum('category_type', ['item', 'post', 'notification', 'ticket']);
            $table->text('image_path')->nullable();
            $table->text('description')->nullable();
            $table->integer('parent')->default(0);
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
        Schema::dropIfExists('categories');
    }
};
