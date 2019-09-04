<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabalhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trabalho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('assunto', 100);
            $table->date('data_entrega');
            $table->string('id_disciplina', 100);
            $table->foreign('id_disciplina')->references('id')->on('Disciplina')->onDelete('cascade')->onUpdate('cascade');
            $table->string('id_turma', 100);
            $table->foreign('id_turma')->references('id')->on('Turma')->onDelete('cascade')->onUpdate('cascade');
            $table->mediumText('descricao');
            $table->rememberToken();
            $table->timestamps();

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Trabalho');
    }
}
