<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class StoreBabRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'kode'   => ['required', 'string', 'max:10'],
            'nama'   => ['required', 'string', 'max:150'],
            'urutan' => ['nullable', 'integer', 'min:0'],
        ];
    }
}
