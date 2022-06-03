<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required',
            'birthday' => 'required',
            'phone_number' => 'required',
            'sex' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'birthday.required' => 'O campo data de nascimento é obrigatório',
            'phone_number.required' => 'O campo telefone é obrigatório',
            'sex.required' => 'O campo gênero é obrigatório',
            'height.required' => 'O campo altura é obrigatório',
            'weight.required' => 'O campo peso é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
        ];
    }
}
