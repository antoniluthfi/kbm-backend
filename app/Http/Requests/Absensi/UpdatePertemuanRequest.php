<?php

namespace App\Http\Requests\Absensi;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePertemuanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'materi'  => ['nullable', 'string', 'max:1000'],
            'catatan' => ['nullable', 'string', 'max:1000'],
        ];
    }
}
