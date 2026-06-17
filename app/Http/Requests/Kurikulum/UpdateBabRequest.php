<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBabRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'kode'   => ['sometimes', 'string', 'max:10'],
            'nama'   => ['sometimes', 'string', 'max:150'],
            'urutan' => ['nullable', 'integer', 'min:0'],
        ];
    }
}
