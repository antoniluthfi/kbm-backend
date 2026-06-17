<?php

namespace App\Policies;

use App\Models\Kelas;
use App\Models\KasTransaksi;
use App\Models\User;

class KasTransaksiPolicy
{
    private function isPengajarKelas(User $user, int $kelasId): bool
    {
        return Kelas::where('id', $kelasId)
            ->whereHas('kelasGuru', fn ($q) =>
                $q->whereHas('pengajar', fn ($p) => $p->where('user_id', $user->id))
            )
            ->exists();
    }

    public function update(User $user, KasTransaksi $kasTransaksi): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar'
            && $this->isPengajarKelas($user, $kasTransaksi->kelas_id)
            && $kasTransaksi->isHariIni();
    }

    public function delete(User $user, KasTransaksi $kasTransaksi): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar'
            && $this->isPengajarKelas($user, $kasTransaksi->kelas_id)
            && $kasTransaksi->isHariIni();
    }
}
