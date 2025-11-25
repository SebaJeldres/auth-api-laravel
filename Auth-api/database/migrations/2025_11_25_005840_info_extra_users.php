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
        Schema::table('users', function (Blueprint $table) {
            $table->string('ced_ruc',13)->nullable();
            $table->string('telf',10)->nullable();
            $table->enum('rol',['Administrador', 'Venderdor', 'Delivery', 'Cliente'])->default('Cliente');
            $table->date('fecha_nac')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColum(['ced_ruc', 'telf', 'rol', 'fecha_nac']);
        });
    }
};
