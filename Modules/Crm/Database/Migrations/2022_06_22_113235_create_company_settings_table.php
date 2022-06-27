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
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->enum('date_format', ['mm/dd/yy', 'dd/mm/yy', 'mm-dd-yy', 'dd-mm-yy'])->default('dd/mm/yy');
            $table->enum('time_format', ['24 hour', '12 hour'])->default('24 hour');
            $table->string('time_zone')->default('Asia/Jakarta');
            $table->string('currencies')->default('IDR');
            $table->string('ccy_symbol')->nullable();
            $table->enum('ccy_symbol_plcmt', ['before amount', 'after amount'])->default('before amount');
            $table->enum('trx_editable_type', ['by days', 'by status'])->default('by status');
            $table->integer('trx_editable_by_days')->default('7');
            $table->string('trx_editable_by_status')->nullable('completed');
            $table->string('item_sku_prefix')->nullable();
            $table->json('invoice_format')->nullable();
            $table->json('bill_format')->nullable();
            $table->json('payment_format')->nullable();
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
        Schema::dropIfExists('company_settings');
    }
};
