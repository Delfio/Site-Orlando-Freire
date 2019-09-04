<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // tabela do Banco
    protected $table = 'banner';
    // Atributos (colunas) da tabela
    protected $fillable = ['nome', 'foto_slide'];
}
