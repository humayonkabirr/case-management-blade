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
        Schema::create('education_infos', function (Blueprint $table) {
            $table->id();
            $table->string('institute');
            $table->string('degree');
            $table->string('major_subject')->nullable();
            $table->string('board_university');
            $table->string('education_level'); // SSC, HSC, Bachelors, Masters, PhD
            $table->string('accreditation')->nullable(); // National/International accreditation
            $table->year('admission_year')->nullable();
            $table->year('graduation_year')->nullable();
            $table->decimal('gpa', 5, 2)->nullable(); // GPA or percentage
            $table->string('honors_awards')->nullable(); // Any honors or awards
            $table->string('location')->nullable(); // City, country
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_infos');
    }
};
