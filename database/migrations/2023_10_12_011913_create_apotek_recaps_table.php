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
        Schema::create('apotek_recaps', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_name');
            $table->integer('stock');
            $table->bigInteger('price');
            $table->enum('type', ['kapsul', 'sirup', 'tablet']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apotek_recaps');
    }
};
