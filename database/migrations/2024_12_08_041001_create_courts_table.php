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
        Schema::create('courts', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->uniqid();
            $table->string('bn_name')->nullable();
            $table->foreignId('division_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('district_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('location', 250)->nullable();
            $table->string('bn_location', 250)->nullable();
            $table->unsignedInteger('serial')->default(1);
            $table->unsignedInteger('status')->default(1)->commit(['0=>Inactive, 1=>Active, 2=>Block, 3=>Band, 4=>Suspend']);
            $table->timestamps(); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courts');
    }
};
