<?php

namespace App\Http\Requests\Idea;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'content' => ['required','min:5','max:240','string'],
        ];
    }

    /*public function messages()
    {
        return [
            'required' => 'Пожалуйста введите вашу мысль',
            'min' => 'Мысль не может быть короче',
            'max' => 'Мысль не может быть длиннее',
            'string' => 'Неверный тип данных',
        ];
    }*/


}
