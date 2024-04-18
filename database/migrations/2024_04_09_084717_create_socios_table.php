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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // relacao do id na tabela socios e que sera chave estrangeira na tabela user
            $table->string('nome');
            $table->string('cc');
            $table->string('morada');
            $table->string('cod_postal');
            $table->string('localidade');
            $table->string('email');
            $table->string('telefone');
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
