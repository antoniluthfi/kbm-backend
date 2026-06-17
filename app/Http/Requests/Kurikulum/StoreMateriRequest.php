<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class StoreMateriRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        $bulan = ['januari','februari','maret','april','mei','juni',
                  'juli','agustus','september','oktober','november','desember'];

        return [
            'bab_kurikulum_id' => ['required', 'integer', 'exists:bab_kurikulum,id'],
            'sub_bab'          => ['nullable', 'string', 'max:150'],
            'judul'            => ['required', 'string', 'max:200'],
            'kompetensi'       => ['nullable', 'string'],
            'metode'           => ['nullable', 'string', 'max:100'],
            'tipe'             => ['required', 'in:umum,individu'],
            'target_bulan'     => ['nullable', 'in:' . implode(',', $bulan)],
            'urutan'           => ['nullable', 'integer', 'min:0'],
        ];
    }
}
