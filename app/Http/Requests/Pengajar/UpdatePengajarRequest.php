<?php

namespace App\Http\Requests\Pengajar;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePengajarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'jenis_kelamin'         => ['required', 'in:L,P'],
            'tanggal_lahir'         => ['nullable', 'date'],
            'alamat'                => ['nullable', 'string'],
            'pendidikan_terakhir'   => ['nullable', 'string', 'max:100'],
            'tanggal_bergabung'     => ['required', 'date'],
            'is_aktif'              => ['boolean'],
        ];
    }
}
