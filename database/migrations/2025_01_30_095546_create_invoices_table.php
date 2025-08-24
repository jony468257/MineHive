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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');
            $table->integer('number')->nullable();
            $table->datetime('date')->nullable();
            $table->datetime('due_date')->nullable();
            $table->string('currency', 255)->nullable();
            $table->string('rate', 255)->nullable();
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->string('bank_account', 255)->nullable();
            $table->string('billing_address', 255)->nullable();
            $table->string('shipping_address', 255)->nullable();
            $table->string('generated_by', 255)->nullable();
            $table->string('attachments', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
