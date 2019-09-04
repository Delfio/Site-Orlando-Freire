<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabalho extends Model
{
    // tabela do Banco
    protected $table = 'trabalho';
    // Atributos (colunas) da tabela
    protected $fillable = ['nome', 'assunto', 'data_entrega', 'id_disciplina', 'id_turma', 'descricao'];
}
