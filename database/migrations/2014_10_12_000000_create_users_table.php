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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name',30);
            $table->string('last_name',30)->nullable();
            $table->string('username')->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('email')->unique();
            $table->date('birthday')->nullable();
            $table->string('blood_group', 3)->nullable();
            $table->string('religion', 15)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('mother_tongue', 20)->nullable();
            $table->text('avatar')->nullable();
            $table->string('type')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
