<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Informes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('assunto', 100);
            $table->date('data_entrega');
            $table->integer('id_disciplina')->unsigned();
            $table->foreign('id_disciplina')->references('id')->on('Disciplina')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_turma')->unsigned();
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
        Schema::dropIfExists('Informes');
    }
}
