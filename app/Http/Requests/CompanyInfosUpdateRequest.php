<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyInfosUpdateRequest  extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            '1' => ['nullable'],
            '2' => ['nullable'],
            '3' => ['nullable'],
            '4' => ['nullable'],
            '5' => ['nullable'],
        ];
    }
}
