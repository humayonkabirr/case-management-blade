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
            $table->string('company_name');
            $table->string('job_title');
            $table->text('responsibilities');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_current')->default(false);
            $table->string('supervisor_name')->nullable();
            $table->string('supervisor_contact')->nullable();
            $table->string('employment_type')->default('Full-time'); // Full-time, Part-time, Contract
            $table->decimal('salary', 10, 2)->nullable(); // Monthly or yearly salary
            $table->timestamps();
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
