<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCpfColumnInAlunosTable extends Migration
{
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('cpf')->nullable()->change(); // Altera o campo 'cpf' para permitir valores nulos
        });
    }

    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('cpf')->nullable(false)->change(); // Restaura o campo 'cpf' para não permitir valores nulos
        });
    }
}
