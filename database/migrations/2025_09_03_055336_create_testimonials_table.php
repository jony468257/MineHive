<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // Client says text
            $table->string('video_url');    // Youtube embed link
            $table->string('client_name')->nullable(); // Optional
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
