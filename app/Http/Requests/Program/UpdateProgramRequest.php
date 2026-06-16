<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'nama'     => ['sometimes', 'string', 'min:2', 'max:150'],
            'jenis'    => ['sometimes', 'in:pengajian_rutin,persinas_asad,keakraban,kemandirian,tahfidz,amal_sholih'],
            'deskripsi' => ['nullable', 'string'],
            'lokasi'   => ['nullable', 'string', 'max:200'],
            'is_aktif' => ['boolean'],
        ];
    }
}
