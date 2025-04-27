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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reply_id')
                ->nullable();
            $table->integer('rating');
            $table->string('name');
            $table->enum('type', ['config-quality', 'assembler-work', 'configuration-rating', 'consultation'])
                ->default('config-quality');
            $table->enum('status', ['pending', 'approved', 'rejected'])
                ->default('pending');
            $table->string('message');
            $table->unsignedBigInteger('configuration_id')
                ->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
