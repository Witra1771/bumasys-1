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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('company_slug');
            $table->string('company_name');
            $table->text('company_icon_path')->nullable();
            $table->text('company_logo_path')->nullable();
            $table->string('company_vat_number')->nullable();
            $table->string('company_phone_number')->nullable();
            $table->string('company_province');
            $table->string('company_city');
            $table->string('company_district');
            $table->string('company_sub_district');
            $table->string('company_zip_code');
            $table->text('company_address');
            $table->text('company_information');
            $table->boolean('company_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
