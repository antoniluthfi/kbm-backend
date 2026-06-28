<?php

namespace App\Http\Requests\Musyawarah;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotulensiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'kategori'             => ['required', 'in:usulan,keputusan,problem,lainnya'],
            'isi'                  => ['required', 'string', 'max:5000'],
            'penanggung_jawab'     => ['nullable', 'string', 'max:100'],
            'status_tindak_lanjut' => ['sometimes', 'in:open,selesai,ditunda'],
        ];
    }
}
