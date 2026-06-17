<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class ReorderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'items'         => ['required', 'array', 'min:1'],
            'items.*.id'    => ['required', 'integer'],
            'items.*.urutan' => ['required', 'integer', 'min:0'],
        ];
    }
}
