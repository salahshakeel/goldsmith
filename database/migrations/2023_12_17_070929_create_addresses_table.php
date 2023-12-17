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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('addressone');
            $table->string('addresstwo');
            $table->string('postalcode');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->enum('primary', ['active', 'inactive'])->default('active');
            $table->enum('type', ['billing', 'shipping'])->default('billing');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
