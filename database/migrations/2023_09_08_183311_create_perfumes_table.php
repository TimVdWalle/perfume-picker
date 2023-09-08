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
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->text('scent_notes');
            $table->integer('longevity')->nullable();
            $table->string('base_type')->nullable();
            $table->string('application_area')->nullable(); // consider using enum for predefined types
            $table->text('description');
            $table->unsignedBigInteger('user_id'); // To link it back to the user who created it
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfumes');
    }
};
