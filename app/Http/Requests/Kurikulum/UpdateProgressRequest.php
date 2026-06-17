<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'status'       => ['required', 'in:belum,sedang,selesai'],
            'catatan'      => ['nullable', 'string', 'max:500'],
            'pertemuan_id' => ['nullable', 'integer', 'exists:pertemuan,id'],
        ];
    }
}
