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
        Schema::create('new_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('licence_owner_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('thana');
            $table->bigInteger('nid');
            $table->string('mobile_number');
            $table->string('licence_number');
            $table->string('plate_number');
            $table->text('image')->nullable();
            $table->text('license_approve_date')->nullable();
            $table->text('paid_fiscal_year');
            $table->integer('licence_renew_fee')->nullable();
            $table->string('license_type');
            $table->integer('license_fee_discount')->nullable();
            $table->text('recommendation_reason')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('license_mode')->default('new');
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
        Schema::dropIfExists('new_licenses');
    }
};
