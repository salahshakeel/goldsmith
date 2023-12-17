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
        Schema::create('oitems', function (Blueprint $table) {
            $table->id();
            $table->json('product');
            $table->decimal('price_per_unit', 10, 2);
            $table->integer('quantity');
            $table->decimal('total', 10, 2);
            $table->morphs('orderable');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oitems');
    }
};
