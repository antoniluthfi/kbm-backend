<?php

namespace App\Policies;

use App\Models\Murid;
use App\Models\User;

class MuridPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role->value, ['super_admin', 'pengajar']);
    }

    public function view(User $user, Murid $murid): bool
    {
        return match ($user->role->value) {
            'super_admin' => true,
            'pengajar'    => true,
            'murid'       => $murid->user_id === $user->id,
            'wali_murid'  => $murid->waliMurid()->where('user_id', $user->id)->exists(),
            default       => false,
        };
    }

    public function create(User $user): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function update(User $user, Murid $murid): bool
    {
        return $user->role->value === 'super_admin';
    }

    public function delete(User $user, Murid $murid): bool
    {
        return $user->role->value === 'super_admin';
    }
}
