<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColetaRequest extends FormRequest
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
            'item_id' => 'required|exists:items,id',
            'entidade_id' => 'required|exists:entidades,id',
            'quantidade' => 'required|numeric|min:1',
            'data' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'item_id.required' => 'O campo item é obrigatório',
            'item_id.exists' => 'O item selecionado não existe',
            'entidade_id.required' => 'O campo entidade é obrigatório',
            'entidade_id.exists' => 'A entidade selecionada não existe',
            'quantidade.required' => 'O campo quantidade é obrigatório',
            'quantidade.numeric' => 'O campo quantidade deve ser um número',
            'quantidade.min' => 'O campo quantidade deve ser maior que zero',
            'data.required' => 'O campo data é obrigatório',
            'data.date' => 'O campo data deve ser uma data válida',
        ];
    }
}
