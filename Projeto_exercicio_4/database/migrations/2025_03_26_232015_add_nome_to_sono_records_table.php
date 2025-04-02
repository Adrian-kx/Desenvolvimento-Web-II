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
    Schema::table('sono_records', function (Blueprint $table) {
        $table->string('nome');  // Adiciona a coluna 'nome'
    });
}

public function down()
{
    Schema::table('sono_records', function (Blueprint $table) {
        $table->dropColumn('nome');  // Remove a coluna 'nome'
    });
}
};
