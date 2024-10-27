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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade'); // Foreign key for divisions table
            $table->string('name'); // District name
            $table->string('bn_name')->nullable(); // Bengali district name
            $table->decimal('lat', 10, 7); // Latitude
            $table->decimal('lon', 10, 7); // Longitude
            $table->string('url')->nullable(); // URL for the district
            $table->unsignedInteger('status')->default(1);
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
