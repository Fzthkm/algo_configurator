<?php

use App\Enums\ConfigurationType;
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
        if (!Schema::hasTable('configurations')) {
            Schema::create('configurations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->enum('type', ConfigurationType::values())
                    ->default(ConfigurationType::Home)
                    ->comment('Типы сборок из App\Enums\ConfigurationType');
                $table->decimal('total_price');
                $table->decimal('total_discount_price');
                $table->decimal('rating', 2, 1)->default(0.0);
                $table->string('tags');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
