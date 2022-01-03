<?php

namespace App\Policies;

use App\Models\Outbreak;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OutbreakPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the outbreak.
     *
     * @param  \App\User  $user
     * @param  \App\outbreak  $Outbreak
     * @return mixed
     */
    public function view(User $user, Outbreak $outbreak)
    {
        // Update $user authorization to view $Outbreak here.
        return true;
    }

    /**
     * Determine whether the user can create Outbreak.
     *
     * @param  \App\User  $user
     * @param  \App\Outbreak  $Outbreak
     * @return mixed
     */
    public function create(User $user, Outbreak $outbreak)
    {
        // Update $user authorization to create $Outbreak here.
        return true;
    }

    /**
     * Determine whether the user can update the Outbreak.
     *
     * @param  \App\User  $user
     * @param  \App\Outbreak  $Outbreak
     * @return mixed
     */
    public function update(User $user, Outbreak $outbreak)
    {
        // Update $user authorization to update $Outbreak here.
        return true;
    }

    /**
     * Determine whether the user can delete the Outbreak.
     *
     * @param  \App\User  $user
     * @param  \App\Outbreak  $Outbreak
     * @return mixed
     */
    public function delete(User $user, Outbreak $outbreak)
    {
        // Update $user authorization to delete $Outbreak here.
        return true;
    }
    
}
