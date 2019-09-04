<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalhoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'                => 'required|max:255|min:3',
            'assunto'             => 'required|max:255|min:3',
            'data_entrega'        => 'required',
            'id_disciplina'       => 'required|min:1',
            'id_turma'            => 'required|min:1',
            'descricao'           => 'required|min:5',
        ];
    }
}
