<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class DuplikatKurikulumRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'tahun_ajaran' => ['required', 'string', 'regex:/^\d{4}\/\d{4}$/'],
        ];
    }
}
