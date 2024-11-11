<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('professor_id');
            $table->timestamps();

            // Relacionamentos
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
