<?php

namespace App\Http\Requests\Musyawarah;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaporanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'kendala_pengajar' => ['nullable', 'string', 'max:5000'],
            'planning'         => ['nullable', 'string', 'max:5000'],
            'tindak_lanjut'    => ['nullable', 'string', 'max:5000'],
        ];
    }
}
