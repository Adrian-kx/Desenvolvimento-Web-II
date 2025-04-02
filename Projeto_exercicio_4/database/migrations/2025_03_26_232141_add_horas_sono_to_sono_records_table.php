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
        $table->float('horas_sono');  // Adiciona a coluna 'horas_sono'
    });
}

public function down()
{
    Schema::table('sono_records', function (Blueprint $table) {
        $table->dropColumn('horas_sono');  // Remove a coluna 'horas_sono'
    });
}
};
