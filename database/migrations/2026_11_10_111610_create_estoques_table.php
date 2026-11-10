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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->dateTime('entrada');
            $table->dateTime('saida');
            $table->foreignId('produto_id');
            $table->integer('quantidade_minima');
            $table->enum('status', ['ativo', 'inativo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
