<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorariosRequest extends FormRequest
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
            'turma'          => 'required|max:255|min:3',
            'seg_1t'         => 'required|max:255|min:3',
            'terc_1t'        => 'required|max:255|min:3',
            'quart_1t'       => 'required|max:255|min:3',
            'quint_1t'       => 'required|max:255|min:3',
            'sext_1t'        => 'required|max:255|min:3',
            'seg_2t'         => 'required|max:255|min:3',
            'terc_2t'        => 'required|max:255|min:3',
            'quart_2t'       => 'required|max:255|min:3',
            'quint_2t'       => 'required|max:255|min:3',
            'sext_2t'        => 'required|max:255|min:3',
            'seg_3t'         => 'required|max:255|min:3',
            'terc_3t'        => 'required|max:255|min:3',
            'quart_3t'       => 'required|max:255|min:3',
            'quint_3t'       => 'required|max:255|min:3',
            'sext_3t'        => 'required|max:255|min:3',
            'seg_4t'         => 'required|max:255|min:3',
            'terc_4t'        => 'required|max:255|min:3',
            'quart_4t'       => 'required|max:255|min:3',
            'quint_4t'       => 'required|max:255|min:3',
            'sext_4t'        => 'required|max:255|min:3',
            'seg_5t'         => 'required|max:255|min:3',
            'terc_5t'        => 'required|max:255|min:3',
            'quart_5t'       => 'required|max:255|min:3',
            'quint_5t'       => 'required|max:255|min:3',
            'sext_5t'        => 'required|max:255|min:3',
        ];
    }
}
