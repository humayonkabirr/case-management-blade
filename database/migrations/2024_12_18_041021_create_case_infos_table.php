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
        Schema::create('case_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('court_id')->constrained()->onDelete('cascade');
            $table->foreignId('advocate_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->string('bn_title')->nullable();
            $table->string('case_no')->nullable();
            $table->string('tender_no')->nullable();
            $table->string('priority')->nullable();
            $table->string('state')->nullable();
            $table->unsignedInteger('serial')->default(1);
            $table->unsignedTinyInteger('status')->default(1)->comment('0=>Inactive, 1=>Active, 2=>Block, 3=>Band, 4=>Suspend'); // Status
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_infos');
    }
};
