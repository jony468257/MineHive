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
        Schema::create('theme_wizards', function (Blueprint $table) {
            $table->id();
            $table->string('active');
            $table->string('inactive');
            $table->string('buttons');
            $table->string('border');
            $table->string('sidebar');
            $table->string('content_box');
            $table->string('header');
            $table->string('footer');
            $table->boolean('status');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_wizards');
    }
};
