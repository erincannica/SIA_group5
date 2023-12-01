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
        Schema::create('igps', function (Blueprint $table) {
            $table->id();
            $table->sling();
            $table->fabrics_of_uniform_m();
            $table->fabrics_of_uniform_f();
            $table->pe_uniform();
            $table->blue_book();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igps');
    }
};
