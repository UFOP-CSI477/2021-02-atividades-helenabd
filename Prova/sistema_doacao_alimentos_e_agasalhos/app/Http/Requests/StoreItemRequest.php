<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'descricao' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'O campo descrição é obrigatório',
            'descricao.max' => 'O campo descrição deve ter no máximo 100 caracteres',
        ];
    }
}
