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
        Schema::create('registered_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('school');
            $table->string('home_district');
            $table->boolean('spouse');
            $table->string('spouse_phone');
            $table->boolean('driver');
            $table->string('present_add');
            $table->string('permanent_add');
            $table->string('blood_group');
            $table->string('profession');
            $table->string('prof_desc');
            $table->string('payment_received_by');
            $table->string('media_id');
            $table->string('code_id');

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
        Schema::dropIfExists('registered_users');
    }
};
