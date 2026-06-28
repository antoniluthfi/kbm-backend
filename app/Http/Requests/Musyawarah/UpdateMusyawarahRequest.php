<?php

namespace App\Http\Requests\Musyawarah;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMusyawarahRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'tanggal'      => ['sometimes', 'date'],
            'catatan_umum' => ['nullable', 'string', 'max:5000'],
        ];
    }
}
