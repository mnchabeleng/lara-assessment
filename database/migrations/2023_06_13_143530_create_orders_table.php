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
            $table->enum('status', ['pending', 'canceled', 'complete'])->default('pending');
            $table->integer('quantity');
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            $table->decimal('discount', $precision = 8, $scale = 2)->default(0);
            $table->decimal('vat', $precision = 8, $scale = 2)->default(14);
            $table->foreignId('product_id');
            $table->foreignId('customer_id');
            $table->foreignId('sale_person_id');
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
