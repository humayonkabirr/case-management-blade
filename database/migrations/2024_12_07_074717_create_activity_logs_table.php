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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('url');
            $table->string('action');
            $table->string('model')->nullable(); 
            $table->string('controller')->nullable(); 
            $table->string('method')->nullable(); 
            $table->json('before')->nullable();
            $table->json('after')->nullable();
            $table->string('device')->nullable();
            $table->string('ip')->nullable();
            $table->string('user_agent')->nullable();
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
        Schema::dropIfExists('activity_logs');
    }
};
