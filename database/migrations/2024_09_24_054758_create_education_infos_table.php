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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('institute');
            $table->string('degree');
            $table->foreignId('education_level_id')->constrained('education_levels')->onDelete('cascade');
            $table->string('major_subject')->nullable();
            $table->string('board_university');
            $table->string('accreditation')->nullable(); // National/International accreditation
            $table->year('admission_year')->nullable();
            $table->year('graduation_year')->nullable();
            $table->decimal('gpa_cgpa', 5, 2)->nullable(); // GPA or percentage
            $table->string('honors_awards')->nullable(); // Any honors or awards
            $table->string('location')->nullable(); // City, country
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
        Schema::dropIfExists('education_infos');
    }
};
