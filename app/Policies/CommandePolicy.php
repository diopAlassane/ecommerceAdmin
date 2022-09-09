<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Commande;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommandePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the commande can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the commande can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function view(User $user, Commande $model)
    {
        return true;
    }

    /**
     * Determine whether the commande can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the commande can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function update(User $user, Commande $model)
    {
        return true;
    }

    /**
     * Determine whether the commande can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function delete(User $user, Commande $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the commande can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function restore(User $user, Commande $model)
    {
        return false;
    }

    /**
     * Determine whether the commande can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Commande  $model
     * @return mixed
     */
    public function forceDelete(User $user, Commande $model)
    {
        return false;
    }
}
