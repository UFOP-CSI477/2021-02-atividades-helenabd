<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'snack' => 'required',
            'calories' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'snack.required' => 'O campo refeição é obrigatório',
            'calories.required' => 'O campo calorias é obrigatório',
        ];
    }
}
