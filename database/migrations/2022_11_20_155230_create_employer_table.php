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
        Schema::create('employer', function (Blueprint $table) {
            $table->id();
            $table->string('signup_fname');
            $table->string('signup_lname');
            $table->string('signup_city');
            $table->string('signup_email');
            $table->string('signup_address');
            $table->string('id_proofs');
            $table->string('signup_mobileno');
            $table->string('signup_password');
            $table->string('signup_cpassword');
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
        Schema::dropIfExists('employer');
    }
};
