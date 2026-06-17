<?php

namespace App\Http\Requests\Kurikulum;

use Illuminate\Foundation\Http\FormRequest;

class ProgressBulkRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->role->value, ['super_admin', 'pengajar']);
    }

    public function rules(): array
    {
        return [
            'items'                => ['required', 'array', 'min:1'],
            'items.*.materi_id'    => ['required', 'integer', 'exists:materi,id'],
            'items.*.murid_id'     => ['required', 'integer', 'exists:murid,id'],
            'items.*.status'       => ['required', 'in:belum,sedang,selesai'],
            'items.*.catatan'      => ['nullable', 'string', 'max:500'],
            'items.*.pertemuan_id' => ['nullable', 'integer', 'exists:pertemuan,id'],
        ];
    }
}
