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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->foreignId('division_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('district_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('upazila_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('union_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
