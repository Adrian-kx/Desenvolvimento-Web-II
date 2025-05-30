<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('imc_records', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('peso');
            $table->float('altura');
            $table->float('imc');
            $table->string('classificacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imc_records');
    }
};
