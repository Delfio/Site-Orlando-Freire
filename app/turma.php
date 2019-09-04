<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turma extends Model
{
    protected $table = 'turma';
    // Atributos (colunas) da tabela
    protected $fillable = ['nome', 'turno'];
}
