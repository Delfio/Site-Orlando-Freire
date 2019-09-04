<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacao extends Model
{
    // tabela do Banco
    protected $table = 'programacao';
    // Atributos (colunas) da tabela ------------------- link não obrigatorio
    protected $fillable = ['nome', 'foto', 'assunto', 'informacoes', 'destinado', 'data_evento'];
}
