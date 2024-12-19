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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_info_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('text');
            $table->string('bn_text')->nullable();
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
        Schema::dropIfExists('documents');
    }
};
