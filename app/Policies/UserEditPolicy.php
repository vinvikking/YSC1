<?php

namespace App\Policies;

use App\User;
use App\Influencer;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserEditPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any influencers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the influencer.
     *
     * @param  \App\User  $user
     * @param  \App\Influencer  $influencer
     * @return mixed
     */
    public function view(User $user, Influencer $influencer)
    {
        //
    }

    /**
     * Determine whether the user can create influencers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the influencer.
     *
     * @param  \App\User  $user
     * @param  \App\Influencer  $influencer
     * @return mixed
     */
    public function update(User $user, Influencer $influencer)
    {
        return $user->id == $Influencer->user_id;
    }

    /**
     * Determine whether the user can delete the influencer.
     *
     * @param  \App\User  $user
     * @param  \App\Influencer  $influencer
     * @return mixed
     */
    public function delete(User $user, Influencer $influencer)
    {
        //
    }

    /**
     * Determine whether the user can restore the influencer.
     *
     * @param  \App\User  $user
     * @param  \App\Influencer  $influencer
     * @return mixed
     */
    public function restore(User $user, Influencer $influencer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the influencer.
     *
     * @param  \App\User  $user
     * @param  \App\Influencer  $influencer
     * @return mixed
     */
    public function forceDelete(User $user, Influencer $influencer)
    {
        //
    }
}
