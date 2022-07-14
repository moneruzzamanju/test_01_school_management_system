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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('father_name');
            $table->string('father_phone_no')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_photo')->nullable();

            $table->string('mother_name');
            $table->string('mother_phone_no')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_photo')->nullable();

            $table->string('office_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('guardians');
    }
};
