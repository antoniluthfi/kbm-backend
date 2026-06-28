<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MuridTemplateExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new MuridTemplateDataSheet(),
            new MuridTemplatePanduanSheet(),
        ];
    }
}
