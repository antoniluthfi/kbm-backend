<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PengajarTemplateExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new PengajarTemplateDataSheet(),
            new PengajarTemplatePanduanSheet(),
        ];
    }
}
