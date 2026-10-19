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
        Schema::create('sales', function (Blueprint $table) {
            $table->date('date_of_purchase');
            $table->char('customer_id', 10);
            $table->char('item_code', 10);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('item_code')->references('item_code')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
