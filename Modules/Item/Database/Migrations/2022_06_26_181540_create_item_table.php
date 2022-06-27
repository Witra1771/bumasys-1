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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->bigInteger('item_brand_id');
            $table->bigInteger('item_warranty_id');
            $table->string('slug');
            $table->string('name');
            $table->json('variant_combination')->nullable();
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_managed_stock')->default(false);
            $table->text('image_path')->nullable();
            $table->text('brochure_path')->nullable();
            $table->enum('item_type', ['service', 'single', 'variable', 'package'])->default('single');
            $table->json('tags');
            $table->bigInteger('parent')->default(0);
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
        Schema::dropIfExists('item');
    }
};
