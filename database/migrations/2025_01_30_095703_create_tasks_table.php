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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');
            $table->string('title', 100)->nullable();
            $table->integer('category_id')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('due_date')->nullable();
            $table->enum('status', ['complete', 'incomplete', 'to-do', 'doing'])->nullable();
            $table->foreignId('milestone_id')->nullable()->constrained('milestones');
            $table->integer('employee_id')->nullable();
            $table->string('description', 500)->nullable();
            $table->string('attachments', 500)->nullable();
            $table->enum('priority', ['high', 'medium', 'low'])->nullable();
            $table->datetime('time_estimate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
