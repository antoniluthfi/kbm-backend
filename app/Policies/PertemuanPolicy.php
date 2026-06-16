<?php

namespace App\Policies;

use App\Models\AbsensiMurid;
use App\Models\Pertemuan;
use App\Models\User;

class PertemuanPolicy
{
    private function isPengajarKelas(User $user, Pertemuan $pertemuan): bool
    {
        return $pertemuan->kelas->kelasGuru()
            ->whereHas('pengajar', fn ($q) => $q->where('user_id', $user->id))
            ->exists();
    }

    public function viewAny(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function view(User $user, Pertemuan $pertemuan): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar' && $this->isPengajarKelas($user, $pertemuan);
    }

    public function create(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function update(User $user, Pertemuan $pertemuan): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar' && $this->isPengajarKelas($user, $pertemuan);
    }

    public function delete(User $user, Pertemuan $pertemuan): bool
    {
        if ($pertemuan->status !== 'berlangsung') {
            return false;
        }
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar' && $this->isPengajarKelas($user, $pertemuan);
    }

    public function inputAbsensi(User $user, Pertemuan $pertemuan): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar' && $this->isPengajarKelas($user, $pertemuan);
    }

    public function tutupSesi(User $user, Pertemuan $pertemuan): bool
    {
        if ($user->role->value === 'super_admin') {
            return true;
        }
        return $user->role->value === 'pengajar' && $this->isPengajarKelas($user, $pertemuan);
    }

    public function viewRekap(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function koreksi(User $user, AbsensiMurid $absensiMurid): bool
    {
        return $user->role->value === 'super_admin';
    }
}
