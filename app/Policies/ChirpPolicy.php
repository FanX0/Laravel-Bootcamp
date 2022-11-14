<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChirpPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Chirp $chirp)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Chirp $chirp)
    {
        return $chirp->user()->is($user);
    }

    public function delete(User $user, Chirp $chirp)
    {
        return $this->update($user, $chirp);
    }

    public function restore(User $user, Chirp $chirp)
    {
        //
    }

    public function forceDelete(User $user, Chirp $chirp)
    {
        //
    }
}
