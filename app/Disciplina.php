<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    // tabela do Banco
    protected $table = 'disciplina';
    // Atributos (colunas) da tabela
    protected $fillable = ['nome'];
}
