<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    // tabela do Banco
    protected $table = 'horarios';
    // Atributos (colunas) da tabela
    protected $fillable = ['turma', 'seg_1t', 'terc_1t', 'quart_1t', 'quint_1t', 'sext_1t', 'seg_2t', 'terc_2t', 'quart_2t', 'quint_2t', 'sext_2t', 'seg_3t', 'terc_3t', 'quart_3t', 'quint_3t', 'sext_3t', 'seg_4t'. 'terc_4t', 'quart_4t', 'quint_4t', 'sext_4t', 'seg_5t', 'terc_5t', 'quart_5t', 'quint_5t', 'sext_5t'];
}
