<?php

namespace App\Policies;

use App\Models\Boilerplate\User;
use App\Models\contacted_us;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactedUsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\contacted_us  $contactedUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, contacted_us $contactedUs)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\contacted_us  $contactedUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, contacted_us $contactedUs)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\contacted_us  $contactedUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, contacted_us $contactedUs)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\contacted_us  $contactedUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, contacted_us $contactedUs)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\contacted_us  $contactedUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, contacted_us $contactedUs)
    {
        //
    }
}
