<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanDetailUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O plano deve conter um nome.',
            'slug.required' => 'O plano deve conter um slug',
            'description.required' => 'O plano deve conter uma descrição.',
            'modules.required' => 'É obrigatório escolher pelo menos 1 módulo.',
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'price' => ['nullable'],
            'modules' => ['required'],
        ];
    }
}
