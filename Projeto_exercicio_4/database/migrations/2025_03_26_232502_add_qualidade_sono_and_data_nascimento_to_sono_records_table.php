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
        $table->string('qualidade_sono'); // Adiciona a coluna 'qualidade_sono'
        $table->date('data_nascimento');  // Adiciona a coluna 'data_nascimento'
    });
}

public function down()
{
    Schema::table('sono_records', function (Blueprint $table) {
        $table->dropColumn('qualidade_sono');  // Remove a coluna 'qualidade_sono'
        $table->dropColumn('data_nascimento');  // Remove a coluna 'data_nascimento'
    });
}
};
