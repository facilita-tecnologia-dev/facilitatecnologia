<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleDetailUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O módulo deve conter um nome.',
            'slug.required' => 'O módulo deve conter um slug',
            'description.required' => 'O módulo deve conter uma descrição.',
            'content.required' => 'O módulo deve conter um texto descritivo.',
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'content' => ['required'],
            'price' => ['nullable'],
        ];
    }
}
