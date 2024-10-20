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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('company_name');
            $table->string('job_title');
            $table->string('designation');
            $table->text('responsibilities')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_current')->default(false);
            $table->string('supervisor_name')->nullable();
            $table->string('supervisor_mobile')->nullable();
            $table->string('supervisor_email')->nullable();
            $table->string('employment_type')->default('Full-time'); // Full-time, Part-time, Contract
            $table->decimal('salary', 10, 2)->nullable(); // Monthly or yearly salary
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
        Schema::dropIfExists('experiences');
    }
};
