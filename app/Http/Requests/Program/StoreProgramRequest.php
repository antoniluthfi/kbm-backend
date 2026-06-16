<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'nama'     => ['required', 'string', 'min:2', 'max:150'],
            'jenis'    => ['required', 'in:pengajian_rutin,persinas_asad,keakraban,kemandirian,tahfidz,amal_sholih'],
            'deskripsi' => ['nullable', 'string'],
            'lokasi'   => ['nullable', 'string', 'max:200'],
            'is_aktif' => ['boolean'],
        ];
    }
}
