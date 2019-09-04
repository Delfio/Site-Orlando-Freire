<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_turma', 100);
            $table->foreign('id_turma')->references('id')->on('Turma')->onDelete('cascade')->onUpdate('cascade');
            $table->string('seg_1t', 100);
            $table->string('terc_1t', 100);
            $table->string('quart_1t', 100);
            $table->string('quint_1t', 100);
            $table->string('sext_1t', 100);
            $table->string('seg_2t', 100);
            $table->string('terc_2t', 100);
            $table->string('quart_2t', 100);
            $table->string('quint_2t', 100);
            $table->string('sext_2t', 100);
            $table->string('seg_3t', 100);
            $table->string('terc_3t', 100);
            $table->string('quart_3t', 100);
            $table->string('quint_3t', 100);
            $table->string('sext_3t', 100);
            $table->string('seg_4t', 100);
            $table->string('terc_4t', 100);
            $table->string('quart_4t', 100);
            $table->string('quint_4t', 100);
            $table->string('sext_4t', 100);
            $table->string('seg_5t', 100);
            $table->string('terc_5t', 100);
            $table->string('quart_5t', 100);
            $table->string('quint_5t', 100);
            $table->string('sext_5t', 100);

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
        Schema::dropIfExists('Horarios');
    }
}
