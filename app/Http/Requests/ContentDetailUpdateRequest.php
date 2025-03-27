<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentDetailUpdateRequest  extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'value.required' => 'O conteúdo deve conter algum texto ou imagem.',
            'order.required' => 'O conteúdo deve conter um valor de ordenação',
            'section_id.required' => 'O conteúdo deve estar uma seção.',
        ];
    }

    public function rules(): array
    {
        return [
            "value" => ['required'],
            "order" => ['required'],
            "section_id" => ['required']
        ];
    }
}
