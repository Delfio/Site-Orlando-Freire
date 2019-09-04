<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramacaoRequest extends FormRequest
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
            'foto'                => 'required|mimes:jpeg,png|max:900',
            'assunto'             => 'required|min:3',
            'informacoes'         => 'required|min:3',
            'destinado'           => 'required|max:12',
            'data_evento'         => 'required',
        ];
    }
}
