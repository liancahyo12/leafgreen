<?php

namespace App\Policies;

use App\Models\Boilerplate\User;
use App\Models\certification;
use Illuminate\Auth\Access\HandlesAuthorization;

class CertificationPolicy
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
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, certification $certification)
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
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, certification $certification)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, certification $certification)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, certification $certification)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Boilerplate\User  $user
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, certification $certification)
    {
        //
    }
}
