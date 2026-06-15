<?php

namespace App\Policies;

use App\Models\Pengajar;
use App\Models\User;

class PengajarPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function view(User $user, Pengajar $pengajar): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function create(User $user): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function update(User $user, Pengajar $pengajar): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function delete(User $user, Pengajar $pengajar): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function toggleAktif(User $user, Pengajar $pengajar): bool
    {
        return $user->role->value === 'super_admin';
    }
}
