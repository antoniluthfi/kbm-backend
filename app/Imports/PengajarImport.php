<?php

namespace App\Imports;

use App\Models\Pengajar;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Validators\Failure;

class PengajarImport implements ToCollection, WithHeadingRow
{
    public int $totalRows    = 0;
    public int $successCount = 0;
    public int $errorCount   = 0;

    /** @var Failure[] */
    private array $importFailures = [];

    public function collection(Collection $rows): void
    {
        $this->totalRows = $rows->count();

        foreach ($rows as $index => $row) {
            $errors = $this->validateRow($row->toArray());
            if (!empty($errors)) {
                $this->errorCount++;
                foreach ($errors as $field => $messages) {
                    $this->importFailures[] = new Failure($index + 2, $field, $messages, $row->toArray());
                }
                continue;
            }

            $userId = null;
            $email  = trim($row['email'] ?? '');
            $phone  = trim($row['phone'] ?? '');

            if ($email !== '') {
                $user   = User::firstOrCreate(
                    ['email' => $email],
                    [
                        'name'     => trim($row['nama']),
                        'phone'    => $phone ?: null,
                        'password' => Hash::make(Str::random(12)),
                        'role'     => 'pengajar',
                    ]
                );
                $userId = $user->id;
            }

            Pengajar::create([
                'user_id'             => $userId,
                'jenis_kelamin'       => strtoupper(substr(trim($row['jenis_kelamin']), 0, 1)),
                'tanggal_lahir'       => $row['tanggal_lahir'] ? Carbon::parse($row['tanggal_lahir']) : null,
                'pendidikan_terakhir' => $row['pendidikan_terakhir'] ? trim($row['pendidikan_terakhir']) : null,
                'tanggal_bergabung'   => Carbon::parse($row['tanggal_bergabung']),
                'alamat'              => $row['alamat'] ? trim($row['alamat']) : null,
                'is_aktif'            => true,
            ]);

            $this->successCount++;
        }
    }

    private function validateRow(array $row): array
    {
        $errors = [];

        if (empty($row['nama'])) {
            $errors['nama'] = ['Kolom nama wajib diisi.'];
        }

        $jk = strtoupper(substr(trim($row['jenis_kelamin'] ?? ''), 0, 1));
        if (!in_array($jk, ['L', 'P'])) {
            $errors['jenis_kelamin'] = ['Jenis kelamin harus L (Laki-laki) atau P (Perempuan).'];
        }

        if (empty($row['tanggal_bergabung'])) {
            $errors['tanggal_bergabung'] = ['Kolom tanggal bergabung wajib diisi.'];
        } elseif (!$this->isValidDate($row['tanggal_bergabung'])) {
            $errors['tanggal_bergabung'] = ['Format tanggal bergabung tidak valid. Gunakan format YYYY-MM-DD.'];
        }

        if (!empty($row['tanggal_lahir']) && !$this->isValidDate($row['tanggal_lahir'])) {
            $errors['tanggal_lahir'] = ['Format tanggal lahir tidak valid. Gunakan format YYYY-MM-DD.'];
        }

        $email = trim($row['email'] ?? '');
        if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = ['Format email tidak valid.'];
        }

        if ($email !== '' && User::where('email', $email)->exists()) {
            $errors['email'] = ["Email {$email} sudah terdaftar."];
        }

        return $errors;
    }

    private function isValidDate(mixed $value): bool
    {
        try {
            Carbon::parse($value);
            return true;
        } catch (\Exception) {
            return false;
        }
    }

    /** @return Failure[] */
    public function getFailures(): array
    {
        return $this->importFailures;
    }
}
