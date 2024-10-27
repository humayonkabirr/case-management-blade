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
        Schema::create('unions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('upazilla_id')->constrained('upazilas')->onDelete('cascade'); // Foreign key referencing upazilas table
            $table->string('name'); // Name of the union
            $table->string('bn_name'); // Bengali name of the union
            $table->string('url'); // URL of the union
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
        Schema::dropIfExists('unions');
    }
};
