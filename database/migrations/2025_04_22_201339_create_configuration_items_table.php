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
        if (!Schema::hasTable('configuration_items')) {
            Schema::create('configuration_items', function (Blueprint $table) {
                $table->id();
                $table->foreignId('configuration_id')
                    ->constrained('configurations');
                $table->unsignedBigInteger('product_id')->comment('ID из внешней БД products');
                $table->decimal('price')->default(0.00);
                $table->decimal('discount_price')->default(0.00);
                $table->string('category')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_items');
    }
};
