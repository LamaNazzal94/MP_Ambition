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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('main_image');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->text('accommodation');
            $table->text('offer');
            $table->string('ranking');
            $table->text('about');
            $table->text('requirement');
            $table->text('cost');
            $table->string('location');
            $table->unsignedBigInteger('country_id'); // Set a default country ID
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            // $table->unsignedBigInteger('country_id')->nullable();
            $table->timestamps();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
