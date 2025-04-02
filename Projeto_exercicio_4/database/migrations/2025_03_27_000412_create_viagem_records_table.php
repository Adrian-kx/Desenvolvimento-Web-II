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
    Schema::create('viagems', function (Blueprint $table) {
        $table->id();
        $table->float('distancia');          // em km
        $table->float('consumo');            // km/l
        $table->float('preco_combustivel');  // R$ por litro
        $table->timestamps();                // created_at e updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viagem_records');
    }
};
