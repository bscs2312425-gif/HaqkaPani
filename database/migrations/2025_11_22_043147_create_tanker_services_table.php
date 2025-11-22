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
        Schema::create('tanker_services', function (Blueprint $table) {
            $table->id();
            $table->string('provider_name');
            $table->string('tanker_size');
            $table->decimal('price', 10, 2);
            $table->text('areas');
            $table->string('delivery_time');
            $table->text('description')->nullable();
            $table->boolean('available')->default(true);
            $table->decimal('rating', 3, 2)->default(4.50);
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanker_services');
    }
};