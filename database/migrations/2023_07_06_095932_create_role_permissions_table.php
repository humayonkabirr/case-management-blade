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
        Schema::create('role_permissions', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->unsignedBigInteger('unique_key')->unique(); // mt_rand(1000000000, 9999999999);
            $table->foreignId('role_id')->constrained();
            $table->foreignId('permission_id')->constrained();
            $table->integer('status')->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
