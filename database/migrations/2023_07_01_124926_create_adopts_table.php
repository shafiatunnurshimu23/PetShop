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
        Schema::create('adopts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('age');
            $table->string('Gender');
            $table->string('color');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->text('description');
            $table->string('SKU');
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopts');
    }
};
