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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('barcode');
            $table->string('source');
            $table->string('gross_weight');
            $table->integer('pcs');
            $table->string('price');
            $table->string('wastage');
            $table->enum('status', ['type1', 'type2'])->default('type1');
            $table->string('denominator');
            $table->morphs('vendorable');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
