<?php

namespace App\Http\Requests\Musyawarah;

use Illuminate\Foundation\Http\FormRequest;

class StoreMusyawarahRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->role->value === 'super_admin';
    }

    public function rules(): array
    {
        return [
            'tanggal' => ['required', 'date'],
            'bulan'   => ['required', 'integer', 'min:1', 'max:12'],
            'tahun'   => ['required', 'integer', 'min:2020'],
        ];
    }
}
