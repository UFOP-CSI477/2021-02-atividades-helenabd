<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEntidadeRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'bairro' => 'required|max:100',
            'cidade' => 'required|max:100',
            'estado' => 'required|max:2',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 100 caracteres',
            'bairro.required' => 'O campo bairro é obrigatório',
            'bairro.max' => 'O campo bairro deve ter no máximo 100 caracteres',
            'cidade.required' => 'O campo cidade é obrigatório',
            'cidade.max' => 'O campo cidade deve ter no máximo 100 caracteres',
            'estado.required' => 'O campo estado é obrigatório',
            'estado.max' => 'O campo estado deve ter no máximo 2 caracteres',
        ];
    }
}
