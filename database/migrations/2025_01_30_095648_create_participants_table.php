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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');
            $table->string('name', 25)->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->nullable();
            $table->datetime('birthday')->nullable();
            $table->string('nationality', 255)->nullable();
            $table->string('participant_id')->nullable();
            $table->string('notes', 500)->nullable();
            $table->string('attachments', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
