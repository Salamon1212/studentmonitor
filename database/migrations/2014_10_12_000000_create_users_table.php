<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->integer('age');
            $table->date('dob')->nullable();
            $table->string('phone_number', 20);
            $table->string('email')->unique();
            $table->string('qualification');
            $table->string('qualification2')->nullable();
            $table->integer('role_id')->unsigned();
            $table->integer('status');
            $table->timestamps();

            // $table->foreign('id')->references('user_id')->on('social');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
