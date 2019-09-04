<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('foto');
            $table->mediumText('assunto');
            $table->Text('informacoes');
            $table->string('destinado', 100);
            $table->date('data_evento');
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
        Schema::dropIfExists('programacao');
    }
}
