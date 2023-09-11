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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_id');
            $table->string('profile');
            $table->string('linked_In');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('designation');
            $table->string('school');
            $table->string('sch_location');
            $table->timestamps();

            $table->foreign('social_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
