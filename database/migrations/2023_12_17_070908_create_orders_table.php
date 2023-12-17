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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->morphs('userable');
            $table->string('payment_method');
            $table->string('payment_id')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'canceled'])->default('pending');
            $table->decimal('total', 10, 2);
            $table->decimal('tax', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
