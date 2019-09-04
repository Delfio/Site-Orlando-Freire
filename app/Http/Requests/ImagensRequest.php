<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagensRequest extends FormRequest
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
            'breve_descricao'     => 'required|min:3',
            'descricao'           => 'required|min:3',
            'link_informacao'     => 'max:255|min:3',
        ];
    }
}
