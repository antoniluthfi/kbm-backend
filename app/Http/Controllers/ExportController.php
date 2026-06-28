<?php

namespace App\Http\Controllers;

use App\Exports\MuridExport;
use App\Exports\MuridTemplateExport;
use App\Exports\PengajarExport;
use App\Exports\PengajarTemplateExport;
use App\Models\Murid;
use App\Models\Pengajar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportController extends Controller
{
    // ───────────────── MURID ─────────────────

    public function muridExcel(Request $request): BinaryFileResponse
    {
        $filters  = $request->only(['search', 'status', 'kelas_id', 'usia_min', 'usia_max']);
        $filename = 'data-murid-' . now()->format('Ymd') . '.xlsx';

        return Excel::download(new MuridExport($filters), $filename);
    }

    public function muridPdf(Request $request): Response
    {
        $filters     = $request->only(['search', 'status', 'kelas_id', 'usia_min', 'usia_max']);
        $filterLabel = $this->buildMuridFilterLabel($filters);

        $murid = Murid::with(['waliMurid', 'kelasAktif.kelas'])
            ->when($filters['search'] ?? null, fn ($q, $v) => $q->where('nama', 'like', "%{$v}%"))
            ->when($filters['status'] ?? null, fn ($q, $v) => $q->where('status', $v))
            ->when($filters['kelas_id'] ?? null, fn ($q, $v) =>
                $q->whereHas('kelasAktif', fn ($k) => $k->where('kelas_id', $v))
            )
            ->when($filters['usia_min'] ?? null, fn ($q, $v) =>
                $q->whereRaw("DATE_PART('year', AGE(CURRENT_DATE, tanggal_lahir)) >= ?", [$v])
            )
            ->when($filters['usia_max'] ?? null, fn ($q, $v) =>
                $q->whereRaw("DATE_PART('year', AGE(CURRENT_DATE, tanggal_lahir)) <= ?", [$v])
            )
            ->orderBy('nama')
            ->get()
            ->each(function (Murid $m) {
                $m->waliUtama = $m->waliMurid->firstWhere('is_primary', true) ?? $m->waliMurid->first();
            });

        $pdf = Pdf::loadView('pdf.murid-list', [
            'murid'       => $murid,
            'cetakOleh'   => $request->user()->name,
            'filterLabel' => $filterLabel,
        ])->setPaper('a4', 'landscape');

        return $pdf->download('data-murid-' . now()->format('Ymd') . '.pdf');
    }

    public function muridTemplate(): BinaryFileResponse
    {
        return Excel::download(new MuridTemplateExport(), 'template-import-murid.xlsx');
    }

    // ───────────────── PENGAJAR ─────────────────

    public function pengajarExcel(Request $request): BinaryFileResponse
    {
        $filters  = $request->only(['search', 'is_aktif']);
        $filename = 'data-pengajar-' . now()->format('Ymd') . '.xlsx';

        return Excel::download(new PengajarExport($filters), $filename);
    }

    public function pengajarPdf(Request $request): Response
    {
        $filters     = $request->only(['search', 'is_aktif']);
        $filterLabel = $this->buildPengajarFilterLabel($filters);

        $pengajar = Pengajar::with('user')
            ->when($filters['search'] ?? null, fn ($q, $v) =>
                $q->whereHas('user', fn ($u) => $u->where('name', 'like', "%{$v}%"))
            )
            ->when(isset($filters['is_aktif']), fn ($q) =>
                $q->where('is_aktif', filter_var($filters['is_aktif'], FILTER_VALIDATE_BOOLEAN))
            )
            ->get()
            ->sortBy('user.name')
            ->values();

        $pdf = Pdf::loadView('pdf.pengajar-list', [
            'pengajar'    => $pengajar,
            'cetakOleh'   => $request->user()->name,
            'filterLabel' => $filterLabel,
        ])->setPaper('a4', 'portrait');

        return $pdf->download('data-pengajar-' . now()->format('Ymd') . '.pdf');
    }

    public function pengajarTemplate(): BinaryFileResponse
    {
        return Excel::download(new PengajarTemplateExport(), 'template-import-pengajar.xlsx');
    }

    // ───────────────── HELPERS ─────────────────

    private function buildMuridFilterLabel(array $filters): array
    {
        $labels = [];

        if (!empty($filters['search'])) {
            $labels[] = 'Cari: ' . $filters['search'];
        }
        if (!empty($filters['status'])) {
            $labels[] = 'Status: ' . ucfirst($filters['status']);
        }
        if (!empty($filters['kelas_id'])) {
            $kelas = \App\Models\Kelas::find($filters['kelas_id']);
            if ($kelas) {
                $labels[] = 'Kelas: ' . $kelas->nama;
            }
        }
        if (!empty($filters['usia_min']) || !empty($filters['usia_max'])) {
            $min = $filters['usia_min'] ?? '–';
            $max = $filters['usia_max'] ?? '–';
            $labels[] = "Usia: {$min}–{$max} tahun";
        }

        return $labels;
    }

    private function buildPengajarFilterLabel(array $filters): array
    {
        $labels = [];

        if (!empty($filters['search'])) {
            $labels[] = 'Cari: ' . $filters['search'];
        }
        if (isset($filters['is_aktif'])) {
            $labels[] = filter_var($filters['is_aktif'], FILTER_VALIDATE_BOOLEAN) ? 'Status: Aktif' : 'Status: Tidak Aktif';
        }

        return $labels;
    }
}
