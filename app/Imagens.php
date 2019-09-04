<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    // tabela do Banco
    protected $table = 'imagens';
    // Atributos (colunas) da tabela ------------------- link não obrigatorio
    protected $fillable = ['nome', 'foto', 'breve_descricao', 'descricao', 'link_informacao'];
}
