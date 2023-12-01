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
        Schema::create('_item_lists', function (Blueprint $table) {
            $table->id();
            $table->order();
            $table->quantity_required();
            $table->order();
            $table->price();
            $table->size();
            $table->discount();
            $table->total();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_item_lists');
    }
};
