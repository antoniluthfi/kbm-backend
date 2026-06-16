<?php

namespace App\Policies;

use App\Models\Jadwal;
use App\Models\User;

class JadwalPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function view(User $user, Jadwal $jadwal): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function create(User $user): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function update(User $user, Jadwal $jadwal): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function delete(User $user, Jadwal $jadwal): bool
    {
        return $user->role->value === 'super_admin';
    }
}
