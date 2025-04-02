<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_sono_records_table.php
public function up()
{
    Schema::create('sono_records', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->float('horas_sono');
        $table->string('qualidade_sono');
        $table->date('data_nascimento');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sono_records');
    }
};
