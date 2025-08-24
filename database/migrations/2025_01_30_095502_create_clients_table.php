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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25)->nullable();
            $table->string('address', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 15)->nullable();
            $table->enum('partner_type', ['academic', 'work placements', 'cultural', 'exchange', 'etc'])->nullable();
            $table->string('website', 255)->nullable();
            $table->enum('preferred_partner_type', ['academic', 'work placements', 'cultural', 'exchange', 'etc'])->nullable();
            $table->enum('focus_areas', ['stem', 'arts', 'languages', 'etc'])->nullable();
            $table->string('notes', 500)->nullable();
            $table->string('attachments', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
